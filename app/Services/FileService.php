<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    /**
     * @param $folder
     * @param $file
     * @param $convertTypeFile
     * @return string
     */
    public static function upload($folder, $file): array
    {
        $fileName = static::generateFileName($file);
        //Storage::putFileAs($folder, $file, $fileName);
        //$file->storeAs($folder, $fileName);
        $file->move($folder, $fileName);
        return ['path' => "$folder/$fileName"];
    }

    /**
     * @param $folder
     * @param  array  $files
     * @return array
     */
    public static function uploads($folder, array $files = []): array
    {
        $filePathArr = [];
        foreach ($files as $file) {
            $filePathArr[] = static::upload($folder, $file);
        }

        return $filePathArr;
    }

    /**
     * @param $filePath
     * @param $isNoImage
     * @return string
     */
    public static function getUrl($filePath, $isNoImage = true): string
    {
        if (empty($filePath) || !Storage::exists($filePath)) {
            return $isNoImage ? config('app.url') . '/images/no_image_item.jpg' : '';
        }

        return config('filesystems.default') != 's3'
            ? Storage::url($filePath)
            : Storage::temporaryUrl($filePath, now()->addMinutes(15));
    }

    /**
     * @param $file
     * @param $convertTypeFile
     * @return string
     */
    public static function generateFileName($file, $convertTypeFile = null): string
    {
        return now()->timestamp . Str::uuid()->getHex() . '.' . $file->getClientOriginalExtension();
    }

    /**
     * @param $filePath
     */
    public static function delete($filePath)
    {
        Storage::delete($filePath);
    }

    public static function uploadImgBase64($folder, $base64)
    {
        [$extension, $image] = explode(';', $base64);

        // Extension
        $tmpExtension = explode('/', $extension);
        $extension = !empty($tmpExtension[1]) ? $tmpExtension[1] : 'jpg';

        // Image
        [, $image] = explode(',', $image);
        $image = base64_decode($image);
        $fileName = now()->timestamp . Str::uuid()->getHex() . '.' . $extension;
        Storage::put($folder . '/' . $fileName, $image);
        //Storage::disk('public')->put($folder . '/' . $fileName, $image);

        $filePath = public_path($folder . '/' . $fileName);
        File::put($filePath, $image);

        return ['path' => "$folder/$fileName"];
    }
}