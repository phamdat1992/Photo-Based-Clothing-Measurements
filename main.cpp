#include <iostream>

#include "recDetect.h"
#include "recCorners.h"
#include "extractClothsFromBackground.h"
#include "photoBasedClothingMeasurements.h"

using namespace std;

int main(int argc, char* argv[])
{
	if (argc == 6)
	{
		Mat inImg = imread(argv[1], IMREAD_COLOR);

		Mat outImg = recDetect(inImg);
		outImg = recCorners(outImg, inImg);
		outImg = extractClothsFromBackground(outImg);
		outImg = photoBasedClothingMeasurements(outImg, argv[3], argv[4], argv[5]);
		imwrite(argv[2], outImg);
	}
}