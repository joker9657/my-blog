<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::orderBy('sorting', 'desc')->paginate(1);
        return view('index', ['paginator' => $articles]);
    }

    public function post(Request $request)
    {
        $id = $request->input('post_id');
        $article = Article::where('id', $id)->first();
        $article->content = \Parsedown::text($article->content);
        return view('details', []);
    }
}
