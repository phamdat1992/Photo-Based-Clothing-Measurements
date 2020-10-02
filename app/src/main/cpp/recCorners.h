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

	int midX = 0;
	int midY = 0;
	for (int i = 0; i < contours[0].size(); ++i) {
	    midX += contours[0][i].x;
        midX += contours[0][i].y;
	}

	midX /= contours[0].size();
	midY /= contours[0].size();

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


	//if (pts_dst.size() == pts_src.size()) {
		Mat h = findHomography(pts_src, pts_dst);
		warpPerspective(im_src, im_out, h, (im_src.size()));

		return im_out;
	//}

	return mc;
}