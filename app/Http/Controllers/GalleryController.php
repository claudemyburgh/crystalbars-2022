<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __invoke(): string
    {
      $images = [];
      $paths = resource_path('/img/examples/*.jpg');
      $paths = glob($paths);
      foreach ($paths as $image) {
        $url = explode('/', $image);
        $images[] = end($url);
      }

      return view('gallery', ['images' => $images]);
    }
}
