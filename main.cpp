#include <opencv2/opencv.hpp>
#include <opencv2/core/core.hpp>
#include <opencv2/highgui.hpp>
#include <iostream>
#include <list>
#include <limits>
#include <algorithm>
#include <fstream>
#include <string>

#include "recDetect.h"

using namespace std;
using namespace cv;

const double ALPHA_J = 10.0;
const double EPS = 0.001;
const double PI = 3.14159265;

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

	bool equal(Point2D* p)
	{
		return this->equal(p->x, p->y);
	}

	bool equal(int x, int y)
	{
		return (this->x == x && this->y == y);
	}

	double distance(int x, int y)
	{
		double dx = double(this->x - x);
		double dy = double(this->y - y);
		return sqrt(dx * dx + dy * dy);
	}

	double distance(Point2D* p)
	{
		return this->distance(p->x, p->y);
	}
};

class ColorNode
{
public:
	int l, r;
	int color;
	int linkLeftUp, linkLeftDown;
	int linkRightUp, LinkRightDown;

	Point2D pL, pR;

	ColorNode(int il, int ir, int ic)
	{
		this->l = il;
		this->r = ir;
		this->color = ic;
	}

	ColorNode()
	{
		this->linkLeftDown = this->LinkRightDown = -1;
		this->linkLeftUp = this->linkRightUp = -1;
	}
};

class Triangle
{
public:
	Point2D p1, p2, p3;

	Triangle(Point2D x, Point2D y, Point2D z)
	{
		this->p1.x = x.x;
		this->p1.y = x.y;

		this->p2.x = y.x;
		this->p2.y = y.y;

		this->p3.x = z.x;
		this->p3.y = z.y;
	}
};

class Edge
{
public:
	Point2D p1, p2;
	double hsg;
	bool isMin;
	int pNext;
	int flag;

	Edge(Point2D* q1, Point2D* q2)
	{
		this->p1.assign(q1);
		this->p2.assign(q2);
	}

	Edge()
	{
		this->flag = -1;
		this->pNext = -1;
		this->isMin = false;
		this->hsg = 0.0;
	}

	void setEdge(int currentImageId, int pNext, double hsg, bool isMin, Point2D* p1, Point2D* p2)
	{
		this->setEdge(currentImageId, pNext, hsg, isMin, p1->x, p1->y, p2->x, p2->y);
	}

	void setEdge(int currentImageId, int pNext, double hsg, bool isMin, int x1, int y1, int x2, int y2)
	{
		this->flag = currentImageId;
		this->pNext = pNext;

		this->hsg = hsg;
		this->isMin = isMin;

		this->p1.assign(x1, y1);
		this->p2.assign(x2, y2);
	}

	bool equal(Edge* e)
	{
		return this->equal(&e->p1, &e->p2);
	}

	bool equal(Point2D* p1, Point2D* p2)
	{
		return this->p1.equal(p1) && this->p2.equal(p2) || this->p1.equal(p2) && this->p2.equal(p1);
	}
};

class EdgeNode
{
public:
	int edgeID;
	int l, r;
	int color;
	int linkLeftDown, LinkRightDown;

	EdgeNode()
	{
		this->edgeID = -1;
		this->l = this->r = this->color = -1;
	}

	void setColorNode(ColorNode* node)
	{
		this->l = node->l;
		this->r = node->r;
		this->linkLeftDown = node->linkLeftDown;
		this->LinkRightDown = node->LinkRightDown;
		this->color = node->color;
		this->edgeID = -1;
	}
};

class EdgeStructure
{
public:
	int headStack;
	Edge* stackEdge;

	void init(int width)
	{
		this->headStack = 0;
		this->stackEdge = new Edge[width];
	}

	~EdgeStructure()
	{
		delete[] stackEdge;
	}

	int getEdgeFromStack(int currentImageId)
	{
		int edgeId = headStack;

		if (stackEdge[headStack].flag != currentImageId)
		{
			++headStack;
		}
		else
		{
			headStack = stackEdge[headStack].pNext;
		}

		stackEdge[edgeId].flag = currentImageId;
		stackEdge[edgeId].pNext = -1;

		return edgeId;
	}

	Edge* getEdge(int edgeId)
	{
		return &this->stackEdge[edgeId];
	}

	void addEdge(int edgeId, int currentImageId)
	{
		stackEdge[edgeId].flag = currentImageId;
		stackEdge[edgeId].pNext = headStack;
		headStack = edgeId;
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

// ref: geeksforgeeks.org/how-to-check-if-a-given-point-lies-inside-a-polygon
// given three colinear points p, q, r, the function checks if
// point q lies on line segment 'pr'
bool onSegment(Point2D* p, Point2D* q, Point2D* r)
{
	return (q->x <= max(p->x, r->x) && q->x >= min(p->x, r->x) && q->y <= max(p->y, r->y) && q->y >= min(p->y, r->y));
}

int orientaion(Point2D* p, Point2D* q, Point2D* r)
{
	int val = (q->y - p->y) * (r->x - q->x) - (q->x - p->x) * (r->y - q->y);

	if (val == 0) // colinear
	{
		return 0;
	}

	return (val > 0) ? 1 : 2; // clock or counterclock wise
}

bool doIntersect(Point2D* p1, Point2D* q1, Point2D* p2, Point2D* q2)
{
	int o1 = orientaion(p1, q1, p2);
	int o2 = orientaion(p1, q1, q2);
	int o3 = orientaion(p2, q2, p1);
	int o4 = orientaion(p2, q2, q1);

	// general case
	if (o1 != o2 && o3 != o4)
	{
		return true;
	}

	// special cases
	// p1, q1 and p2 are colinear and p2 lies on segment p1q1
	if (o1 == 0 && onSegment(p1, p2, q1))
	{
		return true;
	}

	// p1, q1 and p2 are colinear and q2 lies on segment p1q1
	if (o2 == 0 && onSegment(p1, q2, q1))
	{
		return true;
	}

	// p2, q2 and p1 are colinear and p1 lies on segment p2q2
	if (o3 == 0 && onSegment(p2, p1, q2))
	{
		return true;
	}

	// p2, q2 and q1 are colinear and q1 lies on segment p2q2
	if (o4 == 0 && onSegment(p2, q1, q2))
	{
		return true;
	}

	// doesn't fall in any of the above cases
	return false;
}

bool isInside(vector<Point2D> polygon, int n, Point2D* p)
{
	if (n < 3)
	{
		return false;
	}

	Point2D tmp;
	tmp.assign(p);
	--tmp.x;
	--tmp.y;

	Point2D extreme(100000, p->y);
	int count = 0, i = 0;
	do
	{
		int next = (i + 1) % n;
		if (doIntersect(&polygon[i], &polygon[next], &tmp, &extreme))
		{
			if (orientaion(&polygon[i], &tmp, &polygon[next]) == 0)
			{
				return onSegment(&polygon[i], &tmp, &polygon[next]);
			}

			++count;
		}

		i = next;
	} while (i != 0);

	return (count % 2) == 1;
}

int main(int argc, char* argv[])
{
	string imageName;
	Mat outImg;
	ofstream log;
	log.open("log.txt");

	Mat inImg = imread("./input.bmp", IMREAD_COLOR);
	outImg = inImg.clone();

	list<Triangle> triangles;
	list<Edge> ledges;
	ColorNode* f1 = new ColorNode[inImg.cols];
	ColorNode* f2 = new ColorNode[inImg.cols];

	EdgeNode* cc1 = new EdgeNode[inImg.cols];
	EdgeNode* cc2 = new EdgeNode[inImg.cols];

	EdgeStructure edgeStack;
	edgeStack.init(inImg.cols);

	int currentImageId = 0;
	int lenc1 = 0, lenc2 = 0;

	ColorNode* l1 = f1;
	ColorNode* l2 = f2;

	f1->pL.x = f1->pL.y = -1;
	f1->pR.x = f1->pR.y = -1;
	f1->color = -1;
	int nchannels = 3;
	for (int row = 0; row < inImg.rows; ++row)
	{
		// log << "row " << row << endl;

		/*if (row == 6239)
		{
			cout << "testxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
		}*/

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
		l2->linkLeftUp = l2->linkLeftDown = l2->linkRightUp = l2->LinkRightDown = -1;

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
				l2->linkLeftUp = l2->linkLeftDown = l2->linkRightUp = l2->LinkRightDown = -1;
			}

			l2->r = col;
			l2->pR.x = col;
			l2->pR.y = row;

			ptr += nchannels;
		}

		int len1 = l1 - f1;
		int len2 = l2 - f2;

		/*
		log << "l1" << endl;
		for (int i1 = 0; i1 <= len1; ++i1)
		{
			log << f1[i1].l << " " << f1[i1].r << endl;
			log << f1[i1].pL.x << " " << f1[i1].pL.y << " " << f1[i1].pL.gl << " " << f1[i1].pL.gr << endl;
			log << f1[i1].pR.x << " " << f1[i1].pR.y << " " << f1[i1].pR.gl << " " << f1[i1].pR.gr << endl;
		}

		log << "l2" << endl;
		for (int i2 = 0; i2 <= len2; ++i2)
		{
			log << f2[i2].l << " " << f2[i2].r << endl;
			log << f2[i2].pL.x << " " << f2[i2].pL.y << " " << f2[i2].pL.gl << " " << f2[i2].pL.gr << endl;
			log << f2[i2].pR.x << " " << f2[i2].pR.y << " " << f2[i2].pR.gl << " " << f2[i2].pR.gr << endl;
		}
		*/

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

					f2[i2].linkLeftUp = i1;
					f1[i1].linkLeftDown = i2;

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
					f2[i2].linkRightUp = i1;
					f1[i1].LinkRightDown = i2;

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
		/*
		for (int i = 0; i <= len1; ++i)
		{
			if (f1[i].pL.isVertice)
			{
				Point centerCircle(f1[i].l, row - 1);
				int radius = 5;
				Scalar colorCircle(0, 0, 255);
				circle(outImg, centerCircle, radius, colorCircle, FILLED);
			}

			if (f1[i].pR.isVertice)
			{
				Point centerCircle(f1[i].r, row - 1);
				int radius = 5;
				Scalar colorCircle(0, 0, 255);
				circle(outImg, centerCircle, radius, colorCircle, FILLED);
			}
		}
		*/

		int lenc2 = len1;

		/*
		for (int i = 0; i <= lenc1; ++i)
		{
			{
				log << "node id = " << i << endl;
				log << "color " << cc1[i].color << " left " << cc1[i].l << " right " << cc1[i].r << " left_down " << cc1[i].linkLeftDown << " right_down " << cc1[i].LinkRightDown << endl;
				log << "edge" << endl;
				for (int cur = cc1[i].edgeID; cur != -1; cur = edgeStack.getEdge(cur)->pNext)
				{
					log << "[";
					log << "(" << edgeStack.getEdge(cur)->p1.x << ", " << edgeStack.getEdge(cur)->p1.y << ")-";
					log << "(" << edgeStack.getEdge(cur)->p2.x << ", " << edgeStack.getEdge(cur)->p2.y << ") ";
					log << edgeStack.getEdge(cur)->hsg << " - ";
					log << edgeStack.getEdge(cur)->isMin;
					log << "]";
				}
				log << endl;
			}
		}
		*/

		for (int idLeftDown = 0, idLeftUp, idRightUp, idRightDown; idLeftDown <= len1; ++idLeftDown)
		{
			int pRow = row - 1;
			idLeftUp = f1[idLeftDown].linkLeftUp;
			if (idLeftUp == -1)
			{
				// add edge
				cc2[idLeftDown].setColorNode(&f1[idLeftDown]);
				cc2[idLeftDown].edgeID = edgeStack.getEdgeFromStack(currentImageId);
				edgeStack.getEdge(cc2[idLeftDown].edgeID)->setEdge(
					currentImageId,
					-1,
					((double)f1[idLeftDown].r - f1[idLeftDown].l) / ((double)EPS),
					false,
					f1[idLeftDown].l,
					pRow,
					f1[idLeftDown].r,
					pRow
				);
			}
			else
			{
				idRightUp = f1[idLeftDown].linkRightUp;
				if (idRightUp == -1)
				{
					idRightDown = cc1[idLeftUp].LinkRightDown;
					idRightUp = idLeftUp;
				}
				else
				{
					idRightDown = idLeftDown;
				}

				int fkc = idLeftUp;
				for (int j = idLeftUp + 1, indexCur = cc1[idLeftUp].edgeID; j <= idRightUp && indexCur != -1; ++j)
				{
					if (cc1[j].color == f1[idLeftDown].color)
					{
						while (edgeStack.getEdge(indexCur)->pNext != -1)
						{
							indexCur = edgeStack.getEdge(indexCur)->pNext;
						}

						int newEdgeId = edgeStack.getEdgeFromStack(currentImageId);
						edgeStack.getEdge(newEdgeId)->setEdge(
							currentImageId,
							cc1[j].edgeID,
							((double)cc1[j].l - cc1[fkc].r) / ((double)EPS),
							false,
							cc1[fkc].r,
							row - 2,
							cc1[j].l,
							row - 2
						);

						edgeStack.getEdge(indexCur)->pNext = newEdgeId;
						cc1[j].edgeID = -1;

						fkc = j;
					}

					/*
					log << "join node" << endl;
					for (int cur = cc1[idLeftUp].edgeID; cur != -1; cur = edgeStack.getEdge(cur)->pNext)
					{
						log << "(" << edgeStack.getEdge(cur)->p1.x << ", " << edgeStack.getEdge(cur)->p2.x << ") ";
					}
					log << endl;
					*/
				}

				for (int j = idLeftDown; j <= idRightDown; ++j)
				{
					/*
					for (int cur = cc1[idLeftUp].edgeID; cur != -1; cur = edgeStack.getEdge(cur)->pNext)
					{
						cout << "[(" << edgeStack.getEdge(cur)->p1.x << ", " << edgeStack.getEdge(cur)->p1.y << ")";
						cout << "[(" << edgeStack.getEdge(cur)->p2.x << ", " << edgeStack.getEdge(cur)->p2.y << ")] ";
					}
					*/
					cc2[j].setColorNode(&f1[j]);
					if (cc1[idLeftUp].color != f1[j].color)
					{
						// add edge
						cc2[j].edgeID = edgeStack.getEdgeFromStack(currentImageId);
						edgeStack.getEdge(cc2[j].edgeID)->setEdge(
							currentImageId,
							-1,
							((double)f1[j].r - f1[j].l) / ((double)EPS),
							false,
							f1[j].l,
							pRow,
							f1[j].r,
							pRow
						);
					}
					else
					{
						if (f1[j].pL.isVertice)
						{
							// log << "point_left " << "(" << f1[j].l << ", " << row - 1 << ")" << endl;
							Point2D bk;
							for (; cc1[idLeftUp].edgeID != -1; )
							{
								Edge* curEdge = edgeStack.getEdge(cc1[idLeftUp].edgeID);

								/*
								cout << "(" << curEdge->p1.x << ", " << curEdge->p1.y << ")";
								cout << "(" << curEdge->p2.x << ", " << curEdge->p2.y << ")";
								*/
								double hsg;
								if (curEdge->isMin)
								{
									hsg = ((double)f1[j].l - curEdge->p2.x) / ((double)pRow - curEdge->p2.y);
								}
								else
								{
									hsg = ((double)f1[j].l - curEdge->p1.x) / ((double)pRow - curEdge->p1.y);
								}

								if ((curEdge->isMin && hsg >= curEdge->hsg) || (!curEdge->isMin && hsg <= curEdge->hsg))
								{
									if (f1[idLeftDown].color != 0)
									{
										if (curEdge->p1.equal(&curEdge->p2))
										{
											//ledges.push_back(Edge(&curEdge->p1, &Point2D(f1[j].l, pRow)));
										}
										else if (curEdge->p2.equal(f1[j].l, pRow))
										{
											//ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
										}
										else if (curEdge->p1.equal(f1[j].l, pRow))
										{
											//ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
										}
										else
										{
											ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
											ledges.push_back(Edge(&curEdge->p1, &Point2D(f1[j].l, pRow)));
											ledges.push_back(Edge(&curEdge->p2, &Point2D(f1[j].l, pRow)));
										}

										/*
										triangles.push_back(
											Triangle(
												curEdge->p1,
												curEdge->p2,
												Point2D(f1[j].l, pRow)
											)
										);
										*/
									}

									bk.assign(&curEdge->p2);
									int curEdgeId = cc1[idLeftUp].edgeID;
									cc1[idLeftUp].edgeID = curEdge->pNext;
									edgeStack.addEdge(curEdgeId, currentImageId);
								}
								else
								{
									bk.assign(&curEdge->p1);
									break;
								}
							}

							{
								int newEdgeId = edgeStack.getEdgeFromStack(currentImageId);

								edgeStack.getEdge(newEdgeId)->setEdge(
									currentImageId,
									cc1[idLeftUp].edgeID,
									((double)f1[j].l - bk.x) / ((double)pRow - bk.y + EPS),
									true,
									& Point2D(f1[j].l, pRow),
									& bk
								);
								cc1[idLeftUp].edgeID = newEdgeId;
							}
						}

						if (f1[j].pR.isVertice)
						{
							// log << "point_right " << "(" << f1[j].r << ", " << pRow << ")" << endl;

							int fflag1 = -1;
							int fflag2 = cc1[idLeftUp].edgeID;
							for (; fflag2 != -1; )
							{
								//int newEdgeId = edgeStack.getEdgeFromStack(currentImageId);
								Edge* curEdge = edgeStack.getEdge(fflag2);
								double hsg = ((double)f1[j].r - curEdge->p1.x) / ((double)pRow - curEdge->p1.y);

								/*
								cout << "(" << curEdge->p1.x << ", " << curEdge->p1.y << ")";
								cout << "(" << curEdge->p2.x << ", " << curEdge->p2.y << ")";
								*/

								if (!curEdge->isMin && hsg > curEdge->hsg)
								{
									fflag1 = fflag2;
									fflag2 = curEdge->pNext;
								}
								else
								{
									break;
								}
							}

							// neu fflag1 o day -1 khong chung to duoc dieu gi
							if (fflag1 == -1)
							{
								int newEdgeId = edgeStack.getEdgeFromStack(currentImageId);
								Edge* curEdge = edgeStack.getEdge(fflag2);
								edgeStack.getEdge(newEdgeId)->setEdge(
									currentImageId,
									-1,
									((double)f1[j].r - curEdge->p1.x) / ((double)pRow - curEdge->p1.y + EPS),
									false,
									&curEdge->p1,
									&Point2D(f1[j].r, pRow)
								);
								cc2[j].edgeID = newEdgeId;
							}
							else
							{
								cc2[j].edgeID = cc1[idLeftUp].edgeID;

								int newEdgeId = edgeStack.getEdgeFromStack(currentImageId);
								Edge* curEdge = edgeStack.getEdge(fflag1);
								edgeStack.getEdge(newEdgeId)->setEdge(
									currentImageId,
									-1,
									((double)f1[j].r - curEdge->p2.x) / ((double)pRow - curEdge->p2.y + EPS),
									false,
									&curEdge->p2,
									&Point2D(f1[j].r, pRow)
								);

								curEdge->pNext = newEdgeId;
								cc1[idLeftUp].edgeID = fflag2;
							}

							Point2D bk;
							for (; cc1[idLeftUp].edgeID != -1; )
							{
								//cout << endl;
								//cout << cc1[idLeftUp].edgeID;
								Edge* curEdge = edgeStack.getEdge(cc1[idLeftUp].edgeID);

								/*
								cout << "(" << curEdge->p1.x << ", " << curEdge->p1.y << ")";
								cout << "(" << curEdge->p2.x << ", " << curEdge->p2.y << ")";
								*/

								double hsg;
								if (curEdge->isMin)
								{
									hsg = ((double)f1[j].r - curEdge->p2.x) / ((double)pRow - curEdge->p2.y);
								}
								else
								{
									hsg = ((double)f1[j].r - curEdge->p1.x) / ((double)pRow - curEdge->p1.y);
								}

								if ((curEdge->isMin && hsg >= curEdge->hsg) || (!curEdge->isMin && hsg <= curEdge->hsg))
								{
									bk.assign(&curEdge->p2);

									if (f1[idLeftDown].color != 0)
									{
										if (curEdge->p1.equal(&curEdge->p2))
										{
											//ledges.push_back(Edge(&curEdge->p1, &Point2D(f1[j].r, pRow)));
										}
										else if (curEdge->p2.equal(f1[j].r, pRow))
										{
											//ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
										}
										else if (curEdge->p1.equal(f1[j].r, pRow))
										{
											//ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
										}
										else
										{
											ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
											ledges.push_back(Edge(&curEdge->p1, &Point2D(f1[j].r, pRow)));
											ledges.push_back(Edge(&curEdge->p2, &Point2D(f1[j].r, pRow)));
										}
										
										/*
										triangles.push_back(
											Triangle(
												curEdge->p1,
												curEdge->p2,
												Point2D(f1[j].r, pRow)
											)
										);
										*/
									}

									int curEdgeId = cc1[idLeftUp].edgeID;
									cc1[idLeftUp].edgeID = curEdge->pNext;
									edgeStack.addEdge(curEdgeId, currentImageId);
								}
								else
								{
									bk.assign(&curEdge->p1);
									break;
								}
							}

							int newEdgeId = edgeStack.getEdgeFromStack(currentImageId);
							edgeStack.getEdge(newEdgeId)->setEdge(
								currentImageId,
								cc1[idLeftUp].edgeID,
								((double)f1[j].r - bk.x) / ((double)pRow - bk.y + EPS),
								true,
								&Point2D(f1[j].r, pRow),
								&bk
							);
							edgeStack.getEdge(newEdgeId)->pNext = cc1[idLeftUp].edgeID;
							cc1[idLeftUp].edgeID = newEdgeId;
						}
						else
						{
							/*
							cout << "join node" << endl;
							for (int cur = cc1[idLeftUp].edgeID; cur != -1; cur = edgeStack.getEdge(cur)->pNext)
							{
								cout << "(" << edgeStack.getEdge(cur)->p1.x << ", " << edgeStack.getEdge(cur)->p2.x << ") ";
							}
							cout << endl;
							*/

							cc2[j].edgeID = cc1[idLeftUp].edgeID;
							cc1[idLeftUp].edgeID = -1;
						}
					}
				}

				idLeftDown = idRightDown;
			}
		}

		// free unused edge
		for (int i = 0; i <= lenc1; ++i)
		{
			while (cc1[i].edgeID != -1)
			{
				int cur = edgeStack.getEdge(cc1[i].edgeID)->pNext;
				edgeStack.addEdge(cc1[i].edgeID, currentImageId);
				cc1[i].edgeID = cur;
			}
		}

		swap(f1, f2);
		swap(l1, l2);

		swap(cc1, cc2);
		swap(lenc1, lenc2);
	}

	list<Edge> result;
	for (list<Edge>::iterator cur1 = ledges.begin(); cur1 != ledges.end(); ++cur1)
	{
		bool check = true;
		for (list<Edge>::iterator cur2 = ledges.begin(); cur2 != ledges.end(); ++cur2)
		{
			if (cur1 != cur2)
			{
				if (cur1->equal(&cur2->p1, &cur2->p2))
				{
					check = false;
					break;
				}
			}
		}

		if (check == true)
		{
			result.push_back((*cur1));
		}
	}
	
	list<Edge> ttr;
	ttr.push_front((*result.begin()));
	while (ttr.size() < result.size())
	{
		list<Edge>::iterator cur1 = ttr.begin();
		for (list<Edge>::iterator cur2 = result.begin(); cur2 != result.end(); ++cur2)
		{
			if (!cur1->equal(&cur2->p1, &cur2->p2))
			{
				if (cur1->p1.equal(&cur2->p1))
				{
					ttr.push_front(Edge(&cur2->p2, &cur2->p1));
					break;
				}
				else if (cur1->p1.equal(&cur2->p2))
				{
					ttr.push_front(Edge(&cur2->p1, &cur2->p2));
					break;
				}
			}
		}
	}

	Point2D pointMax, pointMin;

	pointMax.assign(0, 0);
	pointMin.assign(inImg.cols - 1, 0);

	int loop = inImg.rows / 2;
	for (int row = 0; row < loop; ++row)
	{
		const uchar* ptr = inImg.ptr(row);
		for (int col = 0; col < inImg.cols; ++col)
		{
			int cc = *ptr;
			//cout << cc;
			if (cc != 0)
			{
				// cout << "dcm";
				if (col > pointMax.x)
				{
					pointMax.assign(col, row);
				}
				if (col < pointMin.x)
				{
					pointMin.assign(col, row);
				}
			}

			ptr += nchannels;
		}
	}

	int radius = 15;
	Scalar colorCircle(0, 0, 255);

	Point centerCircle1(pointMin.x, pointMin.y);
	circle(outImg, centerCircle1, radius, colorCircle, FILLED);

	Point centerCircle2(pointMax.x, pointMax.y);
	circle(outImg, centerCircle2, radius, colorCircle, FILLED);

	double d1 = numeric_limits<double>::max();
	double d2 = numeric_limits<double>::max();

	list<Edge>::iterator dx1, dx2;
	for (list<Edge>::iterator cur1 = ttr.begin(); cur1 != ttr.end(); ++cur1)
	{
		double dis1 = cur1->p1.distance(&pointMin);
		double dis2 = cur1->p1.distance(&pointMax);

		if (dis1 < d1)
		{
			d1 = dis1;
			dx1 = cur1;
		}

		if (dis2 < d2)
		{
			d2 = dis2;
			dx2 = cur1;
		}
	}

	Point2D coAoL, coAoR;
	if (dx1->p1.y >= dx1->p2.y)
	{
		while (dx1->p1.y >= dx1->p2.y)
		{
			coAoL.assign(&dx1->p2);
			++dx1;
			if (dx1 == ttr.end())
			{
				dx1 = ttr.begin();
			}
		}
	}
	else
	{
		while (dx1->p1.y < dx1->p2.y)
		{
			coAoL.assign(&dx1->p1);
			if (dx1 == ttr.begin())
			{
				dx1 = ttr.end();
			}

			--dx1;
		}
	}

	if (dx2->p1.y >= dx2->p2.y)
	{
		while (dx2->p1.y >= dx2->p2.y)
		{
			coAoR.assign(&dx2->p2);
			++dx2;
			if (dx2 == ttr.end())
			{
				dx2 = ttr.begin();
			}
		}
	}
	else
	{
		while (dx2->p1.y < dx2->p2.y)
		{
			coAoR.assign(&dx2->p1);
			if (dx2 == ttr.begin())
			{
				dx2 = ttr.end();
			}

			--dx2;
		}
	}

	Point centerCircle3(coAoL.x, coAoL.y);
	circle(outImg, centerCircle3, radius, colorCircle, FILLED);

	Point centerCircle4(coAoR.x, coAoR.y);
	circle(outImg, centerCircle4, radius, colorCircle, FILLED);

	int center = inImg.rows - (inImg.rows / 3);
	dx1 = ttr.end();
	dx2 = ttr.end();
	for (list<Edge>::iterator cur1 = ttr.begin(); cur1 != ttr.end(); ++cur1)
	{
		if ((cur1->p1.y >= center && cur1->p2.y <= center) || (cur1->p1.y <= center && cur1->p2.y >= center))
		{
			if (dx1 == ttr.end())
			{
				dx1 = cur1;
			}
			else
			{
				dx2 = cur1;
			}
		}
	}

	if (dx1->p1.x > dx2->p1.x)
	{
		swap(dx1, dx2);
	}

	Point2D nachL, nachR;

	if (dx1->p1.y >= dx1->p2.y)
	{
		int dx = 0, dy = 0;
		do {
			nachL.assign(dx1->p2.x, dx1->p2.y);
			++dx1;
			if (dx1 == ttr.end())
			{
				dx1 = ttr.begin();
			}

			dx = abs(dx1->p1.x - dx1->p2.x);
			dy = dx1->p1.y - dx1->p2.y;
		} while (dx < dy);
	}
	else
	{
		int dx = 0, dy = 0;
		do {
			nachL.assign(dx1->p1.x, dx1->p1.y);
			if (dx1 == ttr.begin())
			{
				dx1 = ttr.end();
			}
			--dx1;

			dx = abs(dx1->p2.x - dx1->p1.x);
			dy = dx1->p2.y - dx1->p1.y;
		} while (dx < dy);
	}

	if (dx2->p1.y >= dx2->p2.y)
	{
		int dx = 0, dy = 0;
		do {
			nachR.assign(dx2->p2.x, dx2->p2.y);
			++dx2;
			if (dx2 == ttr.end())
			{
				dx2 = ttr.begin();
			}

			dx = abs(dx2->p1.x - dx2->p2.x);
			dy = dx2->p1.y - dx2->p2.y;
		} while (dx < dy);
	}
	else
	{
		int dx = 0, dy = 0;
		do {
			nachR.assign(dx2->p1.x, dx2->p1.y);
			if (dx2 == ttr.begin())
			{
				dx2 = ttr.end();
			}
			--dx2;

			dx = abs(dx2->p2.x - dx2->p1.x);
			dy = dx2->p2.y - dx2->p1.y;
		} while (dx < dy);
	}

	Point centerCircle5(nachL.x, nachL.y);
	circle(outImg, centerCircle5, radius, colorCircle, FILLED);

	Point centerCircle6(nachR.x, nachR.y);
	circle(outImg, centerCircle6, radius, colorCircle, FILLED);

	// pointMin pointMax
	// coAoL coAoR
	// nachL nachR
	Point2D vaiL, vaiR;
	for (list<Edge>::iterator cur1 = ttr.begin(); cur1 != ttr.end(); ++cur1)
	{
		double a1 = (double)cur1->p2.x - (double)cur1->p1.x;
		double b1 = (double)cur1->p2.y - (double)cur1->p1.y;
		double a2 = (double)0.0;
		double b2 = (double)10.0;
		double aa1 = b1;
		double bb1 = -a1;
		double cc1 = b1 * cur1->p1.x - a1 * cur1->p1.y;
		double aa2 = b2;
		double bb2 = -a2;
		double cc2 = b2 * nachL.x - a2 * nachL.y;
		double d = aa1 * bb2 - aa2 * bb1;
		double dx = cc1 * bb2 - cc2 * bb1;
		double dy = aa1 * cc2 - aa2 * cc1;
		if (d != 0)
		{
			double x = dx / d;
			double y = dy / d;
			
			if (y < nachL.y && ((cur1->p1.x <= x && x <= cur1->p2.x) || (cur1->p2.x <= x && x <= cur1->p1.x)) && ((cur1->p1.y <= y && y <= cur1->p2.y) || (cur1->p2.y <= y && y <= cur1->p1.y)))
			{
				vaiL.assign(x, y);
			}
		}

		a1 = (double)cur1->p2.x - (double)cur1->p1.x;
		b1 = (double)cur1->p2.y - (double)cur1->p1.y;
		a2 = (double)0.0;
		b2 = (double)10.0;
		aa1 = b1;
		bb1 = -a1;
		cc1 = b1 * cur1->p1.x - a1 * cur1->p1.y;
		aa2 = b2;
		bb2 = -a2;
		cc2 = b2 * nachR.x - a2 * nachR.y;
		d = aa1 * bb2 - aa2 * bb1;
		dx = cc1 * bb2 - cc2 * bb1;
		dy = aa1 * cc2 - aa2 * cc1;
		if (d != 0)
		{
			double x = dx / d;
			double y = dy / d;

			if (y < nachR.y && ((cur1->p1.x <= x && x <= cur1->p2.x) || (cur1->p2.x <= x && x <= cur1->p1.x)) && ((cur1->p1.y <= y && y <= cur1->p2.y) || (cur1->p2.y <= y && y <= cur1->p1.y)))
			{
				vaiR.assign(x, y);
			}
		}
	}

	Point centerCircle7(vaiL.x, vaiL.y);
	circle(outImg, centerCircle7, radius, colorCircle, FILLED);

	Point centerCircle8(vaiR.x, vaiR.y);
	circle(outImg, centerCircle8, radius, colorCircle, FILLED);

	// pointMin pointMax
	// coAoL coAoR
	// nachL nachR
	// vaiL vaiR

	double tb1 = (double)(pointMin.x + pointMax.x) / 2.0;
	double tb2 = (double)(coAoL.x + coAoR.x) / 2.0;
	double tb3 = (double)(nachL.x + nachR.x) / 2.0;
	double tb4 = (double)(vaiL.x + vaiR.x) / 2.0;

	double tb = (tb1 + tb2 + tb3 + tb4) / 4.0;

	Point2D pointTop(0, inImg.rows), pointLow;
	for (list<Edge>::iterator cur1 = ttr.begin(); cur1 != ttr.end(); ++cur1)
	{
		double a1 = (double)cur1->p2.x - (double)cur1->p1.x;
		double b1 = (double)cur1->p2.y - (double)cur1->p1.y;
		double a2 = (double)0.0;
		double b2 = (double)10.0;
		double aa1 = b1;
		double bb1 = -a1;
		double cc1 = b1 * cur1->p1.x - a1 * cur1->p1.y;
		double aa2 = b2;
		double bb2 = -a2;
		double cc2 = b2 * tb - a2 * 1.0;
		double d = aa1 * bb2 - aa2 * bb1;
		double dx = cc1 * bb2 - cc2 * bb1;
		double dy = aa1 * cc2 - aa2 * cc1;
		if (d != 0)
		{
			double x = dx / d;
			double y = dy / d;

			if (((cur1->p1.x <= x && x <= cur1->p2.x) || (cur1->p2.x <= x && x <= cur1->p1.x)) && ((cur1->p1.y <= y && y <= cur1->p2.y) || (cur1->p2.y <= y && y <= cur1->p1.y)))
			{
				if (y < pointTop.y)
				{
					pointTop.assign(x, y);
				}

				if (y > pointLow.y)
				{
					pointLow.assign(x, y);
				}
			}
		}
	}
	
	Point centerCircle9(pointTop.x, pointTop.y);
	circle(outImg, centerCircle9, radius, colorCircle, FILLED);

	Point centerCircle10(pointLow.x, pointLow.y);
	circle(outImg, centerCircle10, radius, colorCircle, FILLED);

	// pointMin pointMax
	// coAoL coAoR
	// nachL nachR
	// vaiL vaiR
	// pointTop pointLow

	Point2D eoL(inImg.cols, 0), eoR;
	for (list<Edge>::iterator cur1 = ttr.begin(); cur1 != ttr.end(); ++cur1)
	{
		double a1 = (double)cur1->p2.x - (double)cur1->p1.x;
		double b1 = (double)cur1->p2.y - (double)cur1->p1.y;
		double a2 = (double)10.0;
		double b2 = (double)0.0;
		double aa1 = b1;
		double bb1 = -a1;
		double cc1 = b1 * cur1->p1.x - a1 * cur1->p1.y;
		double aa2 = b2;
		double bb2 = -a2;
		double cc2 = b2 * 1.0 - a2 * (inImg.rows - (inImg.rows / 3));
		double d = aa1 * bb2 - aa2 * bb1;
		double dx = cc1 * bb2 - cc2 * bb1;
		double dy = aa1 * cc2 - aa2 * cc1;
		if (d != 0)
		{
			double x = dx / d;
			double y = dy / d;

			if (((cur1->p1.x <= x && x <= cur1->p2.x) || (cur1->p2.x <= x && x <= cur1->p1.x)) && ((cur1->p1.y <= y && y <= cur1->p2.y) || (cur1->p2.y <= y && y <= cur1->p1.y)))
			{
				if (x < eoL.x)
				{
					eoL.assign(x, y);
				}

				if (x > eoR.x)
				{
					eoR.assign(x, y);
				}
			}
		}
	}

	Point centerCircle11(eoL.x, eoL.y);
	circle(outImg, centerCircle11, radius, colorCircle, FILLED);

	Point centerCircle12(eoR.x, eoR.y);
	circle(outImg, centerCircle12, radius, colorCircle, FILLED);

	// pointMin pointMax
	// coAoL coAoR
	// nachL nachR
	// vaiL vaiR
	// pointTop pointLow
	// eoL eoR

	// do em
	line(
		outImg,
		Point(eoL.x, eoL.y),
		Point(eoR.x, eoR.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	double dd = eoL.distance(&eoR) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((eoL.x + eoR.x) / 2, (eoL.y + eoR.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	// do chieu cao
	line(
		outImg,
		Point(pointTop.x, pointTop.y),
		Point(pointLow.x, pointLow.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	dd = pointLow.distance(&pointTop) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((pointLow.x + pointTop.x) / 2, (pointLow.y + pointTop.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	// do tay ao trai
	line(
		outImg,
		Point(pointMin.x, pointMin.y),
		Point(vaiL.x, vaiL.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	dd = pointMin.distance(&vaiL) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((pointMin.x + vaiL.x) / 2, (pointMin.y + vaiL.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	// do tay ao phai
	line(
		outImg,
		Point(pointMax.x, pointMax.y),
		Point(vaiR.x, vaiR.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	dd = pointMax.distance(&vaiR) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((pointMax.x + vaiR.x) / 2, (pointMax.y + vaiR.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	// do vai trai
	line(
		outImg,
		Point(vaiL.x, vaiL.y),
		Point(coAoL.x, coAoL.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	dd = vaiL.distance(&coAoL) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((vaiL.x + coAoL.x) / 2, (vaiL.y + coAoL.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	// do vai phai
	line(
		outImg,
		Point(vaiR.x, vaiR.y),
		Point(coAoR.x, coAoR.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	dd = vaiR.distance(&coAoR) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((vaiR.x + coAoR.x) / 2, (vaiR.y + coAoR.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	// do co ao
	line(
		outImg,
		Point(coAoL.x, coAoL.y),
		Point(coAoR.x, coAoR.y),
		Scalar(0, 255, 0),
		10,
		8
	);

	dd = coAoL.distance(&coAoR) / 1200 * 29.7;
	putText(outImg, to_string(dd), Point((coAoL.x + coAoR.x) / 2, (coAoL.y + coAoR.y) / 2), FONT_HERSHEY_COMPLEX, 3.0, Scalar(0, 0, 255), 3);
	// ----------------------------
	log.close();
	imwrite("output.bmp", outImg);

	delete[] f1;
	delete[] f2;

	delete[] cc1;
	delete[] cc2;

	return 0;
}
