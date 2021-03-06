<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();  
        return view('guests.articles.index', compact('articles'));
    }
}
