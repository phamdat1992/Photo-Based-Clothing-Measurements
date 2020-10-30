#pragma once

#include "libs.h"

using namespace std;
using namespace cv;

vector<vector<Point> > contours;
vector<Vec4i> hierachy;

double kc(double x1, double y1, double x2, double y2)
{
	double dx = x1 - x2;
	double dy = y1 - y2;
	return sqrt(dx * dx + dy * dy);
}

double sTriangle(double x1, double y1, double x2, double y2, double x3, double y3)
{
	double c1 = kc(x1, y1, x2, y2);
	double c2 = kc(x1, y1, x3, y3);
	double c3 = kc(x2, y2, x3, y3);

	double p = (c1 + c2 + c3) / 2;
	return sqrt(p * (p - c1) * (p - c2) * (p - c3));
}

Mat recCorners(Mat m, Mat im_src)
{
	Mat mThresh;
	Mat mc;
	threshold(m, mThresh, 10, 255, THRESH_BINARY);
	bitwise_not(mThresh, mThresh);
	findContours(mThresh, contours, hierachy, RETR_CCOMP, CHAIN_APPROX_NONE, Point(0, 0));

	mc = Mat::zeros(m.size(), CV_8UC3);
	drawContours(mc, contours, 0, Scalar(255, 0, 0), 1);
	vector<Point> approx;

	double d = 0;


	int midX = 0;
	int midY = 0;
	for (int i = 0; i < contours[0].size(); ++i)
	{
		midX += contours[0][i].x;
		midY += contours[0][i].y;
	}

	midX /= contours[0].size();
	midY /= contours[0].size();

	Point2f top(0, m.rows), bottom(0, 0), left(m.cols, 0), right(0, 0);
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x == midX)
		{
			if (top.y > contours[0][i].y)
			{
				top.x = contours[0][i].x;
				top.y = contours[0][i].y;
			}
			if (bottom.y < contours[0][i].y)
			{
				bottom.x = contours[0][i].x;
				bottom.y = contours[0][i].y;
			}
		}

		if (contours[0][i].y == midY)
		{
			if (left.x > contours[0][i].x)
			{
				left.x = contours[0][i].x;
				left.y = contours[0][i].y;
			}
			if (right.x < contours[0][i].x)
			{
				right.x = contours[0][i].x;
				right.y = contours[0][i].y;
			}
		}
	}

	vector<Point2f> pts_src;
	double ddx = 0.0;
	int xl, yl;
	// dinh tren ben phai hcn
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x > midX && contours[0][i].y < midY)
		{
			double s1 = sTriangle(midX, midY, top.x, top.y, contours[0][i].x, contours[0][i].y);
			double s2 = sTriangle(midX, midY, right.x, right.y, contours[0][i].x, contours[0][i].y);
			double dcm = s1 + s2;
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	ddx = 0.0;
	// dinh tren ben trai hcn
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x < midX && contours[0][i].y < midY)
		{
			double s1 = sTriangle(midX, midY, top.x, top.y, contours[0][i].x, contours[0][i].y);
			double s2 = sTriangle(midX, midY, left.x, left.y, contours[0][i].x, contours[0][i].y);
			double dcm = s1 + s2;
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	ddx = 0.0;
	// dinh duoi ben trai hcn
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x < midX && contours[0][i].y > midY)
		{
			double s1 = sTriangle(midX, midY, bottom.x, bottom.y, contours[0][i].x, contours[0][i].y);
			double s2 = sTriangle(midX, midY, left.x, left.y, contours[0][i].x, contours[0][i].y);
			double dcm = s1 + s2;
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	ddx = 0.0;
	// dinh duoi ben phai hcn
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x > midX && contours[0][i].y > midY)
		{
			double s1 = sTriangle(midX, midY, bottom.x, bottom.y, contours[0][i].x, contours[0][i].y);
			double s2 = sTriangle(midX, midY, right.x, right.y, contours[0][i].x, contours[0][i].y);
			double dcm = s1 + s2;
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	Mat im_out;
	vector<Point2f> pts_dst;
	pts_dst.push_back(Point2f(250, 0));
	pts_dst.push_back(Point2f(0, 0));
	pts_dst.push_back(Point2f(0, 198.59));
	pts_dst.push_back(Point2f(250, 198.59));

	Mat h = findHomography(pts_src, pts_dst);
	warpPerspective(im_src, im_out, h, (im_src.size() * 2));

	int xMax = 0;
	int yMax = 0;
	for (int row = 0; row < im_out.rows; ++row)
	{
		uchar* ptr = im_out.ptr(row);
		for (int col = 0; col < im_out.cols; ++col, ptr += 3)
		{
			if (!(ptr[0] == 0 && ptr[1] == 0 && ptr[2] == 0))
			{
				xMax = max(xMax, col);
				yMax = max(yMax, row);
			}
		}
	}

	Rect myROI(0, 0, xMax, yMax);
	im_out(myROI).copyTo(im_out);

	return im_out;
}