#pragma once

#include <opencv2/opencv.hpp>
#include <opencv2/core/core.hpp>
#include <opencv2/highgui.hpp>
#include <iostream>
#include <list>
#include <limits>
#include <algorithm>
#include <fstream>
#include <vector>

using namespace std;
using namespace cv;

vector<vector<Point> > contours;
vector<Vec4i> hierachy;

Mat rectCorners()
{
	Mat mThresh;
	Mat m = imread("input.bmp", IMREAD_GRAYSCALE);
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

	// 29.7 x 21
	Mat im_src = imread("a1.jpg");
	Mat im_out;

	vector<Point2f> pts_src;
	pts_src.push_back(Point2f(1238, 211));
	pts_src.push_back(Point2f(263, 244));
	pts_src.push_back(Point2f(148, 853));
	pts_src.push_back(Point2f(1185, 824));

	vector<Point2f> pts_dst;
	pts_dst.push_back(Point2f(1200, 0));
	pts_dst.push_back(Point2f(0, 0));
	pts_dst.push_back(Point2f(0, 848.5));
	pts_dst.push_back(Point2f(1200, 848.5));

	Mat h = findHomography(pts_src, pts_dst);
	warpPerspective(im_src, im_out, h, (im_src.size() * 2));

	return im_out;
}