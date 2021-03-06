#pragma once

#include "libs.h"

using namespace std;
using namespace cv;

Mat removeNoise(Mat src)
{
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
		for (int col = 0; col < src.cols; ++col, ptr += 1)
		{
			++index;
			if (ptr[0] == 0)
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
	}

	index = 0;
	for (int row = 0; row < src.rows; ++row)
	{
		uchar* ptr = src.ptr(row);
		for (int col = 0; col < src.cols; ++col, ptr += 1, ++index)
		{
			int fl = unionGet(index, lt);
			if (fl != ffmax)
			{
				ptr[0] = 255;
			}
			else
			{
				ptr[0] = 0;
			}
		}
	}

	//cvtColor(src, src, COLOR_BGR2GRAY);
	Mat se = getStructuringElement(MORPH_RECT, Size(10, 10));
	Mat out;
	morphologyEx(src, out, MORPH_CLOSE, se);

	delete[] lt;
	delete[] dt;

	return out;
}

Mat extractClothsFromBackground(Mat src)
{
	for (int row = 0; row < src.rows; ++row)
	{
		uchar* ptr = src.ptr(row);
		for (int col = 0; col < src.cols; ++col, ptr += 3)
		{
			double b = (double)ptr[0] / 255.0;
			double g = (double)ptr[1] / 255.0;
			double r = (double)ptr[2] / 255.0;

			g = 1 - g;
			double d = sqrt(g * g + r * r + b * b);
			if (d < 0.85)
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
			if (ptr[0] != 0 || ptr[1] != 0 || ptr[2] != 0)
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

	int maxDcm = 0;
	int ffmax = 0;
	for (int i = 0; i < size; ++i)
	{
		int fl = unionGet(i, lt);
		if (dt[fl] > maxDcm)
		{
			maxDcm = dt[fl];
			ffmax = fl;
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
				ptr[0] = ptr[1] = ptr[2] = 255;
			}
			else
			{
				ptr[0] = ptr[1] = ptr[2] = 0;
			}
		}
	}

	delete[] lt;
	delete[] dt;

	cvtColor(src, src, COLOR_BGR2GRAY);
	Mat se = getStructuringElement(MORPH_RECT, Size(10, 10));
	Mat out;
	morphologyEx(src, out, MORPH_CLOSE, se);

	//Mat temp = removeNoise(src);
	out = removeNoise(removeNoise(out));

	int xMax = 0;
	int yMax = 0;
	int xMin = out.cols;
	int yMin = out.rows;
	for (int row = 0; row < out.rows; ++row)
	{
		uchar* ptr = out.ptr(row);
		for (int col = 0; col < out.cols; ++col, ptr += 1)
		{
			if (!(ptr[0] == 0))
			{
				xMax = max(xMax, col);
				yMax = max(yMax, row);
				yMin = min(yMin, row);
				xMin = min(xMin, col);
			}
		}
	}

	int delta = 200;
	delta = min(delta, xMin);
	delta = min(delta, yMin);
	delta = min(delta, out.cols - xMax);
	delta = min(delta, out.rows - yMax);

	Rect myROI(xMin - delta, yMin - delta, xMax - xMin + delta*2, yMax - yMin + delta*2);
	out(myROI).copyTo(out);

	return out;
}