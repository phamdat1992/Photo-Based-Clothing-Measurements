#include "opencv2/core.hpp"
#include <opencv2/imgproc.hpp>
#include <jni.h>
#include <string>

#include "recDetect.h"
#include "recCorners.h"
#include "extractClothsFromBackground.h"
#include "photoBasedClothingMeasurements.h"

using namespace cv;
using namespace std;

extern "C" JNIEXPORT void JNICALL
Java_com_vn_zalora_photo_1based_1clothing_1measurements_MainActivity_clothingMeasurement(
        JNIEnv* env,
        jobject type,
        jlong addrRgba
) {
    Mat &inImg = *(Mat*)addrRgba;

    cvtColor(inImg, inImg, COLOR_RGBA2GRAY);
    recDetect(inImg);
    /*Mat outImg = recDetect(inImg);
    outImg = recCorners(outImg, inImg);
    outImg = extractClothsFromBackground(outImg);
    inImg = photoBasedClothingMeasurements(outImg);*/
}
