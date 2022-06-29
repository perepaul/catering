<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    private function uploadFile(string $dir, UploadedFile $file)
    {
        $filename = Str::random(40) . '.' . $file->extension();
        $file->move(public_path($dir), $filename);
        return $dir . '/' . $filename;
    }
}
