<?php
/**
 * User: Pham Huu Thanh Dat
 * Email: dat.pham@zalora.com
 * Date: 2019-04-09
 * Time: 13:59
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

include("./vendor/autoload.php");

use Aws\Exception\AwsException;
use Aws\S3\S3Client;

class Aws3
{
    /**
     * @var \Aws\S3\S3Client
     */
    private $s3;

    /**
     * Aws3 constructor.
     */
    public function __construct()
    {
        try {
            $this->s3 = new S3Client(
                [
                    'region' => getenv('AWS_REGION', true),
                    'version' => getenv('AWS_VERSION', true),
                    /*'credentials' => false,
                    'credentials' => [
                        'key' => getenv('AWS_KEY', true),
                        'secret' => getenv('AWS_SECRET', true),
                    ]*/
                ]
            );
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param string $filePath
     * @param string $fileName
     * @return \Aws\Result
     * @throws Exception
     */
    public function saveFile($filePath, $fileName)
    {
        try {
            return $this->s3->putObject(
                [
                    "Bucket" => getenv('AWS_BUCKET', true),
                    "SourceFile" => $filePath,
                    "Key" => $fileName
                ]
            );
        } catch (AwsException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @param string $fileName
     * @return \Aws\Result
     * @throws Exception
     */
    public function getFile($fileName, $savePath)
    {
        try {
            // Get the object.
            return $this->s3->getObject(
                [
                    'Bucket' => getenv('AWS_BUCKET', true),
                    'Key' => $fileName,
                    'SaveAs' => $savePath . "/" . $fileName
                ]
            );
        } catch (AwsException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @param string $fileName
     * @return string
     * @throws Exception
     */
    public function getUrl($fileName)
    {
        try {
            return $this->s3->getObjectUrl(
                getenv('AWS_BUCKET', true),
                $fileName
            );
        } catch (AwsException $e) {
            throw new Exception($e->getMessage());
        }
    }
}