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
	do {
		d = d + 1;
		approxPolyDP(contours[0], approx, d, true);
	} while (approx.size() > 4);

	contours.push_back(approx);
	
	int midX = (contours[1][0].x + contours[1][1].x + contours[1][2].x + contours[1][3].x) / 4;
	int midY = (contours[1][0].y + contours[1][1].y + contours[1][2].y + contours[1][3].y) / 4;

	vector<Point2f> pts_src;
	for (int i = 0; i < 4; ++i)
	{
		if (contours[1][i].x > midX && contours[1][i].y < midY)
		{
			pts_src.push_back(Point2f(contours[1][i].x, contours[1][i].y));
			break;
		}
	}

	for (int i = 0; i < 4; ++i)
	{
		if (contours[1][i].x < midX && contours[1][i].y < midY)
		{
			pts_src.push_back(Point2f(contours[1][i].x, contours[1][i].y));
			break;
		}
	}

	for (int i = 0; i < 4; ++i)
	{
		if (contours[1][i].x < midX && contours[1][i].y > midY)
		{
			pts_src.push_back(Point2f(contours[1][i].x, contours[1][i].y));
			break;
		}
	}

	for (int i = 0; i < 4; ++i)
	{
		if (contours[1][i].x > midX && contours[1][i].y > midY)
		{
			pts_src.push_back(Point2f(contours[1][i].x, contours[1][i].y));
			break;
		}
	}

	Mat im_out;
	vector<Point2f> pts_dst;
	pts_dst.push_back(Point2f(756, 0));
	pts_dst.push_back(Point2f(0, 0));
	pts_dst.push_back(Point2f(0, 600.558));
	pts_dst.push_back(Point2f(756, 600.558));

	Mat h = findHomography(pts_src, pts_dst);
	warpPerspective(im_src, im_out, h, (im_src.size()));

	return im_out;
}