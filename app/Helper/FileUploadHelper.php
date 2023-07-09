<?php

namespace App\Helper;

class FileUploadHelper
{
    public function uploadImageToStorage($image, $path)
    {
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('/uploads' . $path, $filename, ['disk' => 'public_uploads']);
        $filePath = 'uploads' . $path . "/" . $filename;

        return $filePath;
    }
}
