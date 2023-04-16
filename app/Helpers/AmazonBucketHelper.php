<?php

namespace App\Helpers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AmazonBucketHelper
{

    public static function storeImageToBucketFromRequest(string $path, UploadedFile $file)
    {
        try {
            return $file->store($path, 's3');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
