<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use App\Models\Youtube;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $youtubes = Youtube::all();
        $images = Image::all();
        $articles = Article::all();

        return view('index', ['youtubes' => $youtubes, 'images' => $images, 'articles' => $articles]);
    }

    public function get()
    {
        $youtubes = Youtube::all();

        return key($youtubes[]);
    }
}
