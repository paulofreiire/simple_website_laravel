<?php


namespace App\Support;

use Illuminate\Support\Facades\Log;

class Cropper
{
    public static function thumb(string $uri, int $width = null, int $height = null)
    {
        $cropper = new \CoffeeCode\Cropper\Cropper('../public/storage/cache');
        $pathThumb = $cropper->make($uri, $width, $height);
        $pathThumb = substr_replace($pathThumb, '', 0, 10);
        return $pathThumb;
    }
}

