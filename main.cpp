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

	bool equal(Point2D* p)
	{
		return this->equal(p->x, p->y);
	}

	bool equal(int x, int y)
	{
		return (this->x == x && this->y == y);
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

int main(int argc, char* argv[])
{
	string imageName;
	Mat inImg, outImg;
	ofstream log;
	log.open("log.txt");

	readImage(inImg, "./cluster.bmp");
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

	for (int row = 0; row < inImg.rows; ++row)
	{
		// log << "row " << row << endl;

		if (row == 348)
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

			ptr += 3;
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
									if (f1[idLeftDown].color == 61)
									{
										ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
										ledges.push_back(Edge(&curEdge->p1, &Point2D(f1[j].l, pRow)));
										ledges.push_back(Edge(&curEdge->p2, &Point2D(f1[j].l, pRow)));
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
									&Point2D(f1[j].l, pRow),
									&bk
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

									if (f1[idLeftDown].color == 61)
									{
										ledges.push_back(Edge(&curEdge->p1, &curEdge->p2));
										ledges.push_back(Edge(&curEdge->p1, &Point2D(f1[j].r, pRow)));
										ledges.push_back(Edge(&curEdge->p2, &Point2D(f1[j].r, pRow)));
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
	while (ttr.size() <= result.size() + 95)
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

	for (list<Edge>::iterator cur1 = result.begin(); cur1 != result.end(); ++cur1)
	{
		log << "[(" << cur1->p1.x << ", " << cur1->p1.y << ") - (" << cur1->p2.x << ", " << cur1->p2.y << ")]" << endl;
		line(
			outImg,
			Point(cur1->p1.x, cur1->p1.y),
			Point(cur1->p2.x, cur1->p2.y),
			Scalar(123, 12, 90),
			2,
			8
		);
	}

	log.close();
	imwrite("output.bmp", outImg);

	delete[] f1;
	delete[] f2;

	delete[] cc1;
	delete[] cc2;

	return 0;
}
