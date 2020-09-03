#include <iostream>

#include "recDetect.h"
#include "recCorners.h";
#include "extractClothsFromBackground.h";
#include "photoBasedClothingMeasurements.h";

using namespace std;

int main()
{
	Mat inImg = imread("./input.jpg", IMREAD_COLOR);

	Mat outImg = recDetect(inImg);
	outImg = recCorners(outImg, inImg);
	outImg = extractClothsFromBackground(outImg);
	outImg = photoBasedClothingMeasurements(outImg);
	imwrite("./out.bmp", outImg);
}