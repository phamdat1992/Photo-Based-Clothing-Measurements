<?php

/*
 * Created by :
 * Pham Huu Thanh Dat | dat.pham@zalora.com
 * Copyright © 2019 Zalora vn
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

session_start();

class Api extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        $this->load->library(
            [
                //'aws3'
            ]
        );
    }

    public function test()
    {
        echo "test api";
    }

    public function process()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $queue = $data["queue"];
        $message = $data["message"];
        $id = $data["id"];
        $imageBase64 = $data["base64"];
        $path = APPPATH . '../assets/images/';

        // Process File
        if (!$this->upload_file($path, $id, $imageBase64)) {
            echo "Error: Upload Image Error!";
            return;
        }

        echo "aaa";
        $seg = msg_get_queue($queue, 0666);
        var_dump($seg);
        echo "xxxx";
        msg_send($seg, 1, $message);
        echo "bbbb";

        /*

        try {
            $this->aws3->saveFile($image_path . $new_image_name, $new_image_name);
            echo "success";
        } catch (Exception $e) {
            echo "can not save file to s3";
        }
        */
    }

    public function startEvent()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');

        $time = date('r');
        $queue = explode("=", $_SERVER['REQUEST_URI'])[1];

        $seg = msg_get_queue($queue);
        $stat = msg_stat_queue( $seg );

        if ( $stat['msg_qnum']>0 ) {
            msg_receive($seg, 1, $msgtype, 1024, $data);
            echo "data: " . $data . "\n\n";
        }
        flush();
    }

    private function upload_file($path, $id, $imageBase64)
    {
        $file = $path . $id . '.jpg';
        if (file_exists($file)) unlink($file);
        $image_parts = explode(";base64,", $imageBase64);
        $image_type_aux = explode("image/", $imageBase64);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        file_put_contents($file, $image_base64);
        return file_exists($file);
    }
}
