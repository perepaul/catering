<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    private function uploadFile(string $dir, UploadedFile $file)
    {
        return Storage::putFile($dir, $file);
    }
}
