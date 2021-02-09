<?php
/*
 * Created by :
 * Pham Huu Thanh Dat | dat.pham@zalora.com
 * Copyright © 2019 Zalora vn
 */

/*
 * Program Description :
 * This program contain function to handle curl using curl multiple execute
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE);
mb_internal_encoding('utf-8');

class CurlHandler
{

    private $multiCurl;
    private $requests;
    private $responses;

    function procPOSTSingleCurl($url, $param)
    {
        /*
         * Main function to process POST request using multiple curl
         * Input :
         *      $url : URL in String
         *      $param : POST parameter in Array, with format :
         *              array( postvar(1) => value(1), postvar(2) => value(2), ... , postvar(n) => value(n))
         */

        $content = http_build_query($param);

        $request = curl_init();

        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request, CURLOPT_POSTFIELDS, $content);

        $response = curl_exec($request);

        curl_close($request);

        return $response;
    }

    function procGETSingleCurl($url)
    {
        /*
         * Main function to process GET request using multiple curl
         * Input :
         *      $url : URL in String
         */

        $request = curl_init();

        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($request);

        curl_close($request);

        return $response;
    }

    function procPOSTMultiCurl($url, $param)
    {
        /*
         * Main function to process POST request using multiple curl
         * Input :
         *      $url : URL in String
         *      $param : POST parameter in Array, with format :
         *              [0] => array( postvar(1) => value(1), postvar(2) => value(2), ... , postvar(n) => value(n))
         *              [1] => array( postvar(1) => value(1), postvar(2) => value(2), ... , postvar(n) => value(n))
         *              ...
         *              [n] => array( postvar(n) => value(n), postvar(n) => value(n), ... , postvar(n) => value(n))
         */

        //Initialise
        $this->multiCurl = curl_multi_init();
        $this->initPOSTMultiCurl($url, $param);

        //Send curl request
        $this->executeCurl();

        //Get curl response
        $this->getResponse();

        curl_multi_close($this->multiCurl);

        return $this->responses;
    }

    function initPOSTMultiCurl($url, $param)
    {
        /*
         * This function will initialise POST request multiple curl
         * as many as data count in the array $param
         */

        $this->requests = [];
        $count = 0;

        foreach ($param as $paramData) {
            $content = http_build_query($paramData);
            $this->requests[$count] = curl_init();

            curl_setopt($this->requests[$count], CURLOPT_URL, $url);
            curl_setopt($this->requests[$count], CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($this->requests[$count], CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($this->requests[$count], CURLOPT_RETURNTRANSFER, true);
            curl_setopt($this->requests[$count], CURLOPT_POST, true);
            curl_setopt($this->requests[$count], CURLOPT_POSTFIELDS, $content);

            curl_multi_add_handle($this->multiCurl, $this->requests[$count]);
            $count++;
        }
    }

    function executeCurl()
    {
        /*
         * This function will execute multiple curl
         */

        $active = null;
        do {
            $mrc = curl_multi_exec($this->multiCurl, $active);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);

        while ($active && $mrc == CURLM_OK) {
            if (curl_multi_select($this->multiCurl) != -1) {
                do {
                    $mrc = curl_multi_exec($this->multiCurl, $active);
                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
            }
        }
    }

    function getResponse()
    {
        /*
         * This function will get response from curl
         * and put it into variable $responses
         */

        $this->responses = [];
        foreach ($this->requests as $key => $value) {
            $this->responses[$key] = curl_multi_getcontent($value);
            curl_multi_remove_handle($this->multiCurl, $value);
        }
    }

    function parseResponseXML($responses)
    {
        /*
         * This function will convert the culr response
         * from string (with xml format) into array
         */

        $arrayResult = [];
        foreach ($responses as $response) {
            $arrayXml = simplexml_load_string($response);
            array_push($arrayResult, $arrayXml);
        }
        return $arrayResult;
    }

    function parseResponseJSON($responses)
    {
        /*
         * This function will parse the culr response
         * from JSON format into array
         */

        $arrayResult = [];
        foreach ($responses as $response) {
            $respArr = json_decode($response, true);
            array_push($arrayResult, $respArr);
        }
        return $arrayResult;
    }
}

?>