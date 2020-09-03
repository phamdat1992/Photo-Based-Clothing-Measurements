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
	imwrite("test1.bmp", mThresh);

	mc = Mat::zeros(m.size(), CV_8UC3);
	drawContours(mc, contours, 0, Scalar(255, 0, 0), 1);
	vector<Point> approx;

	double d = 0;
	do {
		d = d + 1;
		approxPolyDP(contours[0], approx, d, true);
	} while (approx.size() > 4);

	contours.push_back(approx);

	drawContours(mc, contours, contours.size() - 1, Scalar(0, 0, 255), 1);
	imwrite("test2.bmp", mc);
	
	Mat im_out;
	vector<Point2f> pts_src;
	pts_src.push_back(Point2f(1238, 211));
	pts_src.push_back(Point2f(263, 244));
	pts_src.push_back(Point2f(148, 853));
	pts_src.push_back(Point2f(1185, 824));

	vector<Point2f> pts_dst;
	pts_dst.push_back(Point2f(1080, 0));
	pts_dst.push_back(Point2f(0, 0));
	pts_dst.push_back(Point2f(0, 763.65));
	pts_dst.push_back(Point2f(1080, 763.65));

	Mat h = findHomography(pts_src, pts_dst);
	warpPerspective(im_src, im_out, h, (im_src.size()));

	return im_out;
}