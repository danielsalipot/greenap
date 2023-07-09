<?php

namespace App\Helper;

class FileUploadHelper
{
    public function uploadImageToStorage($image, $path)
    {
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->storeAs($path, $filename);
        $filePath = 'storage' . $path . "/" . $filename;

        return $filePath;
    }
}
