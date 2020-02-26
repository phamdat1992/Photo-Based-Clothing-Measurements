#include <opencv2/opencv.hpp>
#include <opencv2/core/core.hpp>
#include <opencv2/highgui.hpp>
#include <iostream>
#include <list>
#include <limits>
#include <algorithm>
#include <fstream>

using namespace std;
using namespace cv;

const double ALPHA_J = 10.0;
const double EPS = 0.001;

class Point2D
{
public:
	bool isVertice;
	int x, y;
	double gl, gr;

	Point2D(int x, int y)
	{
		this->x = x;
		this->y = y;
	}

	Point2D()
	{
		this->isVertice = true;
		this->gl = numeric_limits<double>::min();
		this->gr = numeric_limits<double>::max();
		this->x = -1;
		this->y = -1;
	}

	void assign(Point2D* p)
	{
		this->x = p->x;
		this->y = p->y;
	}

	void assign(int x, int y)
	{
		this->x = x;
		this->y = y;
	}
};

class Edge
{
public:
	Point2D p1, p2;
	int pLeft, pRight;
};

class ColorNode
{
public:
	int l, r;
	int color;

	Point2D pL, pR;

	ColorNode(int il, int ir, int ic)
	{
		this->l = il;
		this->r = ir;
		this->color = ic;
	}

	ColorNode()
	{
	}
};

void readImage(Mat& image, const string& path)
{
	image = imread(path, IMREAD_COLOR);

	if (image.empty())
	{
		cout << "Image not found" << endl;
	}
}

int main(int argc, char* argv[])
{
	string imageName;
	Mat inImg, outImg;
	ofstream log;
	log.open("log.txt");

	readImage(inImg, "./cluster.bmp");
	outImg = inImg.clone();

	ColorNode* f1 = new ColorNode[inImg.cols];
	ColorNode* f2 = new ColorNode[inImg.cols];

	ColorNode* l1 = f1;
	ColorNode* l2 = f2;

	Edge* edges = new Edge[inImg.cols];
	int eSize = 0;

	f1->pL.x = f1->pL.y = -1;
	f1->pR.x = f1->pR.y = -1;
	f1->color = -1;

	for (int row = 0; row < inImg.rows; ++row)
	{

		if (row == 400)
		{
			cout << "test";
		}

		const uchar* ptr = inImg.ptr(row);

		l2 = f2;
		l2->l = l2->r = 0;
		l2->color = *ptr;
		l2->pL.x = l2->pR.x = 0;
		l2->pL.y = l2->pR.y = row;
		l2->pL.gl = numeric_limits<double>::lowest();
		l2->pL.gr = numeric_limits<double>::max();
		l2->pR.gl = numeric_limits<double>::lowest();
		l2->pR.gr = numeric_limits<double>::max();
		l2->pL.isVertice = l2->pR.isVertice = true;

		for (int col = 0; col < inImg.cols; ++col)
		{
			int cc = *ptr;
			if (cc != l2->color)
			{
				++l2;
				l2->l = col;
				l2->pL.x = col;
				l2->pL.y = row;
				l2->color = cc;

				l2->pL.gl = numeric_limits<double>::lowest();
				l2->pL.gr = numeric_limits<double>::max();
				l2->pR.gl = numeric_limits<double>::lowest();
				l2->pR.gr = numeric_limits<double>::max();
				l2->pL.isVertice = l2->pR.isVertice = true;
			}

			l2->r = col;
			l2->pR.x = col;
			l2->pR.y = row;

			ptr += 3;
		}

		int len1 = l1 - f1;
		int len2 = l2 - f2;

		for (int i1 = 0, i2 = 0; i1 <= len1 && i2 <= len2; ++i2)
		{
			for (; i1 <= len1 && f1[i1].r < f2[i2].l; ++i1);
			for (; i1 <= len1 && f1[i1].color != f2[i2].color && f1[i1].r <= f2[i2].r; ++i1);

			if (i1 <= len1 && i2 <= len2 && f1[i1].l <= f2[i2].r && f2[i2].l <= f1[i1].r)
			{
				if (f1[i1].color == f2[i2].color && f1[i1].pL.x != -1 && f1[i1].pL.y != -1)
				{
					f2[i2].pL.x = f1[i1].pL.x;
					f2[i2].pL.y = f1[i1].pL.y;

					if (f1[i1].pL.x != f1[i1].l || f1[i1].pL.y != row - 1)
					{
						f1[i1].pL.isVertice = false;
					}

					double dx = (double)f2[i2].l - (double)f2[i2].pL.x;
					double dy = (double)row - (double)f2[i2].pL.y;
					double da = dx / dy;

					if (f1[i1].pL.gl <= da && da <= f1[i1].pL.gr)
					{
						double dm = (dy - ALPHA_J >= 0) ? (dy - ALPHA_J) : 0;

						double ss1 = min((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						double ss2 = min((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmin = min(ss1, ss2);

						ss1 = max((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						ss2 = max((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmax = max(ss1, ss2);


						f2[i2].pL.gl = max(f1[i1].pL.gl, fmin);
						f2[i2].pL.gr = min(f1[i1].pL.gr, fmax);
					}
					else
					{
						f2[i2].pL.gl = 1.0;
						f2[i2].pL.gr = -1.0;
					}

					if (f2[i2].pL.gl > f2[i2].pL.gr)
					{
						f2[i2].pL.x = f1[i1].l;
						f2[i2].pL.y = row - 1;

						f1[i1].pL.isVertice = true;

						dx = (double)f2[i2].l - (double)f2[i2].pL.x;
						dy = (double)row - (double)f2[i2].pL.y;

						double dm = (dy - ALPHA_J >= 0) ? (dy - ALPHA_J) : 0;

						double ss1 = min((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						double ss2 = min((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmin = min(ss1, ss2);

						ss1 = max((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						ss2 = max((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmax = max(ss1, ss2);
						f2[i2].pL.gl = fmin;
						f2[i2].pL.gr = fmax;
					}

					++i1;
				}
			}
		}

		for (int i1 = len1, i2 = len2; i1 >= 0 && i2 >= 0; --i2)
		{
			for (; i1 >= 0 && f1[i1].l > f2[i2].r; --i1);
			for (; i1 >= 0 && f1[i1].color != f2[i2].color && f1[i1].l >= f2[i2].l; --i1);

			if (i1 >= 0 && i2 >= 0 && f1[i1].r >= f2[i2].l && f2[i2].r >= f1[i1].l)
			{
				if (f1[i1].color == f2[i2].color && f1[i1].pR.x != -1 && f1[i1].pR.y != -1)
				{
					f2[i2].pR.x = f1[i1].pR.x;
					f2[i2].pR.y = f1[i1].pR.y;

					double dx = (double)f2[i2].r - (double)f2[i2].pR.x;
					double dy = (double)row - (double)f2[i2].pR.y;
					double da = dx / dy;

					if (f1[i1].pR.x != f1[i1].r || f1[i1].pR.y != row - 1)
					{
						f1[i1].pR.isVertice = false;
					}

					if (f1[i1].pR.gl <= da && da <= f1[i1].pR.gr)
					{
						double dm = (dy - ALPHA_J >= 0) ? (dy - ALPHA_J) : 0;

						double ss1 = min((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						double ss2 = min((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmin = min(ss1, ss2);

						ss1 = max((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						ss2 = max((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmax = max(ss1, ss2);

						f2[i2].pR.gl = max(f1[i1].pR.gl, fmin);
						f2[i2].pR.gr = min(f1[i1].pR.gr, fmax);
					}
					else
					{
						f2[i2].pR.gl = 1.0;
						f2[i2].pR.gr = -1.0;
					}

					if (f2[i2].pR.gl > f2[i2].pR.gr)
					{
						f2[i2].pR.x = f1[i1].r;
						f2[i2].pR.y = row - 1;

						f1[i1].pR.isVertice = true;

						dx = (double)f2[i2].r - (double)f2[i2].pR.x;
						dy = (double)row - (double)f2[i2].pR.y;

						double dm = (dy - ALPHA_J >= 0) ? (dy - ALPHA_J) : 0;

						double ss1 = min((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						double ss2 = min((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmin = min(ss1, ss2);

						ss1 = max((dx - ALPHA_J) / (dm + EPS), (dx - ALPHA_J) / (dy + ALPHA_J + EPS));
						ss2 = max((dx + ALPHA_J) / (dm + EPS), (dx + ALPHA_J) / (dy + ALPHA_J + EPS));

						double fmax = max(ss1, ss2);
						f2[i2].pR.gl = fmin;
						f2[i2].pR.gr = fmax;
					}

					--i1;
				}
			}
		}

		// print keypoints
		for (int i = 0; i <= len1; ++i)
		{
			if (f1[i].color != 61)
			{
				continue;
			}

			if (f1[i].pL.isVertice && f1[i].pR.isVertice)
			{
				edges[eSize].p1.assign(f1[i].l, row - 1);
				edges[eSize].p2.assign(f1[i].r, row - 1);
				edges[eSize].pLeft = -1;
				edges[eSize].pRight = -1;
				++eSize;
			}

			if (f1[i].pL.isVertice)
			{
				if (f1[i].l == 2147 && row - 1 == 347)
				{
					Point centerCircle(f1[i].l, row - 1);
					int radius = 5;
					Scalar colorCircle(0, 0, 255);
					circle(outImg, centerCircle, radius, colorCircle, FILLED);
				}

				for (int j = 0; j < eSize; ++j)
				{
					if (edges[j].p1.x == f1[i].pL.x && f1[i].pL.y == edges[j].p1.y)
					{
						edges[eSize].p1.assign(f1[i].l, row - 1);
						edges[eSize].p2.assign(&edges[j].p1);
						edges[eSize].pRight = i;
						edges[j].pLeft = eSize;
						break;
					}
					else if (edges[j].p2.x == f1[i].pL.x && f1[i].pL.y == edges[j].p2.y)
					{
						edges[eSize].p2.assign(f1[i].l, row - 1);
						edges[eSize].p1.assign(&edges[j].p2);
						edges[eSize].pLeft = i;
						edges[j].pRight = eSize;
						break;
					}
				}

				for (int j = 0; j < eSize; ++j)
				{
					if (edges[j].p1.x == f1[i].l && row - 1 == edges[j].p1.y)
					{
						edges[eSize].pRight = i;
						edges[j].pLeft = eSize;
						break;
					}
					else if (edges[j].p2.x == f1[i].l && row - 1 == edges[j].p2.y)
					{
						edges[eSize].pLeft = i;
						edges[j].pRight = eSize;
						break;
					}
				}

				++eSize;
			}

			if (f1[i].pR.isVertice)
			{
				for (int j = 0; j < eSize; ++j)
				{
					if (edges[j].p1.x == f1[i].pR.x && f1[i].pR.y == edges[j].p1.y)
					{
						edges[eSize].p1.assign(f1[i].r, row - 1);
						edges[eSize].p2.assign(&edges[j].p1);
						edges[eSize].pLeft = -1;
						edges[eSize].pRight = i;
						edges[j].pLeft = eSize;
						break;
					}
					else if (edges[j].p2.x == f1[i].pR.x && f1[i].pR.y == edges[j].p2.y)
					{
						edges[eSize].p2.assign(f1[i].r, row - 1);
						edges[eSize].p1.assign(&edges[j].p2);
						edges[eSize].pLeft = i;
						edges[eSize].pRight = -1;
						edges[j].pRight = eSize;
						break;
					}
				}

				for (int j = 0; j < eSize; ++j)
				{
					if (edges[j].p1.x == f1[i].r && row - 1 == edges[j].p1.y)
					{
						edges[eSize].pRight = i;
						edges[j].pLeft = eSize;
						break;
					}
					else if (edges[j].p2.x == f1[i].r && row - 1 == edges[j].p2.y)
					{
						edges[eSize].pLeft = i;
						edges[j].pRight = eSize;
						break;
					}
				}

				++eSize;
			}
		}

		swap(f1, f2);
		swap(l1, l2);
	}

	/*
	int sst = 0;
	do
	{
		log << "[(" << edges[sst].p1.x << ", " << edges[sst].p1.y << ") - (" << edges[sst].p2.x << ", " << edges[sst].p2.y << ")]" << endl;
		sst = edges[sst].pRight;
	} while (sst != 0);
	*/

	for (int sst = 0; sst < eSize; ++sst)
	{
		log << sst << "  -  [(" << edges[sst].p1.x << ", " << edges[sst].p1.y << ") - (" << edges[sst].p2.x << ", " << edges[sst].p2.y << ")] Left" << edges[sst].pLeft << " Right " << edges[sst].pRight << endl;
	}

	log.close();
	imwrite("output.bmp", outImg);

	delete[] f1;
	delete[] f2;
	delete[] edges;

	return 0;
}
