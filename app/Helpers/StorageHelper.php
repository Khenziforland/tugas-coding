<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class StorageHelper
{
    /**
     ** Get url file.
     *
     * @param $folder
     * @param $filename
     * @return string
     */
    public static function getUrlFile($folder, $filename)
    {
        $result = Storage::disk('s3')->url($folder . '/' . $filename);

        return $result;
    }

    /**
     ** Upload file.
     *
     * @param $file
     * @param $additionalPath
     * @return string
     */
    public static function uploadFile($file, $folder)
    {
        $timestamp = Carbon::now()->isoFormat('YYYYMMDDHHmmss');
        $uniqueSuffix = uniqid();
        $fileExtension = $file->getClientOriginalExtension();
        $filename = "{$timestamp}{$uniqueSuffix}.{$fileExtension}";

        Storage::disk('s3')->putFileAs($folder, $file, $filename);

        return $filename;
    }

    /**
     ** Delete file.
     *
     * @param $folder
     * @param $filename
     * @return void
     */
    public static function deleteFile($folder, $filename)
    {
        $pathFile = $folder . '/' . $filename;
        $statusPath = Storage::disk('s3')->exists($pathFile);

        if ($statusPath) {
            Storage::disk('s3')->delete($pathFile);
        }
    }
}
