package com.vn.zalora.photo_based_clothing_measurements;

import android.Manifest;
import android.app.Activity;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.os.Bundle;
import android.view.View;
import android.view.WindowManager;
import android.widget.ImageView;

import org.opencv.android.JavaCameraView;
import org.opencv.android.Utils;
import org.opencv.core.Mat;

import static org.opencv.imgproc.Imgproc.resize;

public class ShowResultActivity extends Activity {

    private ImageView imageView;

    // Used to load the 'native-lib' library on application startup.
    static {
        System.loadLibrary("native-lib");
    }

    /**
     * A native method that is implemented by the 'native-lib' native library,
     * which is packaged with this application.
     */
    public native void clothingMeasurement(long addrRgba);

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.layout_show_result);

        this.imageView = (ImageView) findViewById(R.id.imageView);
        getWindow().addFlags(WindowManager.LayoutParams.FLAG_KEEP_SCREEN_ON);


        Mat result = MainActivity.mRgba.clone();
        //Bitmap bmp= BitmapFactory.decodeResource(getResources(),R.drawable.in1);
        //Utils.bitmapToMat(bmp, result);
        clothingMeasurement(result.getNativeObjAddr());
        resize(result, result, MainActivity.mRgba.size(), 0, 0, 1);

        Bitmap resultBitmap = Bitmap.createBitmap(result.cols(),  result.rows(), Bitmap.Config.ARGB_8888);;
        Utils.matToBitmap(result, resultBitmap);
        imageView.setImageBitmap(resultBitmap);
    }

    public void onTakeNewPicture(View view) {
        Intent getNameScreenIntent = new Intent(this, MainActivity.class);
        startActivity(getNameScreenIntent);
    }

    /*
    * Bitmap bmp=BitmapFactory.decodeResource(getResources(),R.drawable.in1);
        Utils.bitmapToMat(bmp, this.mRgba);
        Core.rotate(inputFrame.rgba(), this.mRgba, Core.ROTATE_90_CLOCKWISE);
        clothingMeasurement(this.mRgba.getNativeObjAddr());
        resize(mRgba, mRgba, inputFrame.rgba().size(), 0, 0, 1);
    * */
}
