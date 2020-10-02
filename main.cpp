#include <iostream>

#include "recDetect.h"
#include "recCorners.h";
#include "extractClothsFromBackground.h";
#include "photoBasedClothingMeasurements.h";

using namespace std;

int main()
{
	Mat inImg = imread("./in3.jpg", IMREAD_COLOR);

	Mat outImg = recDetect(inImg);
	imwrite("./out_rec.bmp", outImg);
	outImg = recCorners(outImg, inImg);
	imwrite("./out_test.bmp", outImg);
	outImg = extractClothsFromBackground(outImg);
	outImg = photoBasedClothingMeasurements(outImg);
	imwrite("./out.bmp", outImg);
}