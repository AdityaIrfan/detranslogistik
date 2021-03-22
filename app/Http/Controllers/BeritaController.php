<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('artikel', ['articles' => $articles]);
    }
}
