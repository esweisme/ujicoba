<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Image;

class interventionController extends Controller
{
    public function index()
    {
        $img = Image::make('image.jpg');
        //upload dan ambilnama
        $image = $img->resize(350, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save('image/resize/npm-'.time().'.jpg');

       echo $image->basePath()."<br><img src='".$image->basePath()."'><br>";

       //ambil nama dan extensi gambar
       echo $collection = Str::of($image->basePath())->explode('/')->last();
    //    echo $collection->last();
    }
}
