<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Article::with('author')->where('featured', '=', 1)->first();
        $latest = Article::with('author')->latest('updated_at')->limit(2)->get();
        $articles = Article::with('category', 'author')->paginate(9);
        // dd($articles);
        return view('home', [
            'articles' => $articles,
            'latest' => $latest,
            'featured' => $featured
        ]);
    }
}