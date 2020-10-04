#pragma once

#include "libs.h"

using namespace std;
using namespace cv;

vector<vector<Point> > contours;
vector<Vec4i> hierachy;

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
	for (int i = 0; i < contours[0].size(); ++i) {
		midX += contours[0][i].x;
		midY += contours[0][i].y;
	}

	midX /= contours[0].size();
	midY /= contours[0].size();

	vector<Point2f> pts_src;
	double ddx = 0.0;
	int xl, yl;
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x > midX && contours[0][i].y < midY)
		{
			double dxl = (double)contours[0][i].x - (double)midX;
			double dyl = (double)contours[0][i].y - (double)midY;
			double dcm = sqrt(dxl * dxl + dyl * dyl);
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	ddx = 0.0;
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x < midX && contours[0][i].y < midY)
		{
			double dxl = (double)contours[0][i].x - (double)midX;
			double dyl = (double)contours[0][i].y - (double)midY;
			double dcm = sqrt(dxl * dxl + dyl * dyl);
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	ddx = 0.0;
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x < midX && contours[0][i].y > midY)
		{
			double dxl = (double)contours[0][i].x - (double)midX;
			double dyl = (double)contours[0][i].y - (double)midY;
			double dcm = sqrt(dxl * dxl + dyl * dyl);
			if (dcm > ddx) {
				ddx = dcm;
				xl = contours[0][i].x;
				yl = contours[0][i].y;
			}
		}
	}
	pts_src.push_back(Point2f(xl, yl));

	ddx = 0.0;
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x > midX && contours[0][i].y > midY)
		{
			double dxl = (double)contours[0][i].x - (double)midX;
			double dyl = (double)contours[0][i].y - (double)midY;
			double dcm = sqrt(dxl * dxl + dyl * dyl);
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
	warpPerspective(im_src, im_out, h, (im_src.size()*2));

	int xMax = 0;
	int yMax = 0;
    for (int row = 0; row < im_out.rows; ++row)
    {
        uchar* ptr = im_out.ptr(row);
        for (int col = 0; col < im_out.cols; ++col, ptr += 4)
        {
            if (!(ptr[0] == 0 && ptr[1] == 0 && ptr[2] == 0 && ptr[3] == 0))
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