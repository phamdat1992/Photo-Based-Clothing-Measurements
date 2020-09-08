#pragma once

#include "libs.h"

using namespace std;
using namespace cv;

Mat recDetect(Mat in_src)
{
	Mat src = in_src.clone();
	for (int row = 0; row < src.rows; ++row)
	{
		uchar* ptr = src.ptr(row);
		for (int col = 0; col < src.cols; ++col, ptr += 3)
		{
			double b = (double)ptr[0] / 255.0;
			double g = (double)ptr[1] / 255.0;
			double r = (double)ptr[2] / 255.0;

			r = 1 - r;
			double d = sqrt(g * g + r * r + b * b);
			if (d < 0.8)
			{
				ptr[0] = ptr[1] = ptr[2] = 0;
			}
			else
			{
				ptr[0] = ptr[1] = ptr[2] = 255;
			}
		}
	}

	int size = src.rows * src.cols;
	int* lt = new int[size];
	int* dt = new int[size];
	for (int i = 0; i < size; ++i)
	{
		lt[i] = i;
		dt[i] = 0;
	}

	int index = -1;
	for (int row = 0; row < src.rows; ++row)
	{
		uchar* ptr = src.ptr(row);
		for (int col = 0; col < src.cols; ++col, ptr += 3)
		{
			++index;
			if (ptr[0] == 0 && ptr[1] == 0 && ptr[2] == 0)
			{
				dt[index] = 1;

				int f1 = -1, f2 = -1;
				if (row > 0)
				{
					int id1 = (row - 1) * src.cols + col;
					f1 = unionGet(id1, lt);
					if (dt[f1] == 0)
					{
						f1 = -1;
					}
				}

				if (f1 != -1)
				{
					if (f1 < lt[index])
					{
						dt[f1] += dt[lt[index]];
						dt[lt[index]] = 0;
						unionUpdate(lt[index], f1, lt);
					}
					else
					{
						dt[lt[index]] += dt[f1];
						dt[f1] = 0;
						unionUpdate(f1, lt[index], lt);
					}
				}

				if (col > 0)
				{
					int id2 = (row)*src.cols + col - 1;
					f2 = unionGet(id2, lt);
					if (dt[f2] == 0)
					{
						f2 = -1;
					}
				}

				if (f2 != -1 && f2 != lt[index])
				{
					if (f2 < lt[index])
					{
						dt[f2] += dt[lt[index]];
						dt[lt[index]] = 0;
						unionUpdate(lt[index], f2, lt);
					}
					else
					{
						dt[lt[index]] += dt[f2];
						dt[f2] = 0;
						unionUpdate(f2, lt[index], lt);
					}
				}
			}
		}
	}

	int max = 0;
	int ffmax = 0;
	for (int i = 0; i < size; ++i)
	{
		int fl = unionGet(i, lt);
		if (dt[fl] > max)
		{
			max = dt[fl];
			ffmax = fl;
		}

		if (fl != 0) {
			// cout << "dcm";
		}
	}

	index = 0;
	for (int row = 0; row < src.rows; ++row)
	{
		uchar* ptr = src.ptr(row);
		for (int col = 0; col < src.cols; ++col, ptr += 3, ++index)
		{
			int fl = unionGet(index, lt);
			if (fl == ffmax)
			{
				ptr[0] = ptr[1] = ptr[2] = 0;
			}
			else
			{
				ptr[0] = ptr[1] = ptr[2] = 255;
			}
		}
	}

	cvtColor(src, src, COLOR_BGR2GRAY);
	Mat se = getStructuringElement(MORPH_RECT, Size(10, 10));
	Mat out;
	morphologyEx(src, out, MORPH_CLOSE, se);

	delete[] lt;
	delete[] dt;

	return src;
}