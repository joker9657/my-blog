<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * @param Request $request
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sort = $request->sort;
        $articles = Article::orderBy('sorting', 'desc')->when($sort, function ($query) use ($sort) {
            $category = Category::where('name', $sort)->first('id');
            $query->where('category_id', $category->id);
        })->paginate(1);
        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('index', compact('articles', 'categories', 'recent_articles'));
    }

    public function post(Request $request)
    {
        $slug = $request->slug;
        $article = Article::where('slug', $slug)->first();
        $article->content = \Parsedown::instance()->text($article->content);

        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('post', compact('article', 'categories', 'recent_articles'));
    }
}
