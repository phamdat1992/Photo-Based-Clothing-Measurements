#pragma once

#include "libs.h"
#include "photoBasedClothingMeasurements.h"

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
        midX += contours[0][i].y;
	}

	midX /= contours[0].size();
	midY /= contours[0].size();
	Point2D mid;
	mid.assign(midX, midY);

	vector<Point2f> pts_src;
	double ddx = 0.0;
	Point2D ot;
	for (int i = 0; i < contours[0].size(); ++i)
	{
		if (contours[0][i].x > midX && contours[0][i].y < midY)
		{
		    double dcm = mid.distance(contours[0][i].x, contours[0][i].y);
		    if (dcm > ddx) {
		        ddx = dcm;
		        ot.assign(contours[0][i].x, contours[0][i].y);
		    }
		}
	}
    pts_src.push_back(Point2f(ot.x, ot.y));

    ddx = 0.0;
    for (int i = 0; i < contours[0].size(); ++i)
    {
        if (contours[1][i].x < midX && contours[1][i].y < midY)
        {
            double dcm = mid.distance(contours[0][i].x, contours[0][i].y);
            if (dcm > ddx) {
                ddx = dcm;
                ot.assign(contours[0][i].x, contours[0][i].y);
            }
        }
    }
    pts_src.push_back(Point2f(ot.x, ot.y));

    ddx = 0.0;
    for (int i = 0; i < contours[0].size(); ++i)
    {
        if (contours[1][i].x < midX && contours[1][i].y > midY)
        {
            double dcm = mid.distance(contours[0][i].x, contours[0][i].y);
            if (dcm > ddx) {
                ddx = dcm;
                ot.assign(contours[0][i].x, contours[0][i].y);
            }
        }
    }
    pts_src.push_back(Point2f(ot.x, ot.y));

    ddx = 0.0;
    for (int i = 0; i < contours[0].size(); ++i)
    {
        if (contours[1][i].x > midX && contours[1][i].y > midY)
        {
            double dcm = mid.distance(contours[0][i].x, contours[0][i].y);
            if (dcm > ddx) {
                ddx = dcm;
                ot.assign(contours[0][i].x, contours[0][i].y);
            }
        }
    }
    pts_src.push_back(Point2f(ot.x, ot.y));

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