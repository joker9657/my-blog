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
        $per_page = 5;
        $sort = $request->sort;
        $articles = Article::orderBy('sorting', 'desc')->when($sort, function ($query) use ($sort) {
            $category = Category::where('name', $sort)->firstOrFail('id');
            $query->where('category_id', $category->id);
        })->paginate($per_page);
        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('index', compact('articles', 'categories', 'recent_articles'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post(Request $request)
    {
        $slug = $request->slug;
        $article = Article::with('category')->when($slug, function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->firstOrFail();

        $redis = app()->get('redis');
        $redis->pconnect('127.0.0.1', '6379');
        $redis->auth(config('database.redis.default.password'));
        if ($redis->isConnected()) {
            $redis->zIncrby('view_count', 1, 'article:' . $article->id);
        }
        $article->content = \Parsedown::instance()->text($article->content);

        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('post', compact('article', 'categories', 'recent_articles'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function archive()
    {
        $articles = Article::latest()->select(['title', 'slug', 'created_at'])->get();
        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('archive', compact('articles', 'categories', 'recent_articles'));
    }

//    public function tags()
//    {
//        $categories = Category::all();
//        $recent_articles = Article::latest()->limit(6)->get();
//        return view('tag', compact('categories', 'recent_articles'));
//    }

    /**
     * 关于我
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('about', compact('categories', 'recent_articles'));
    }

    /**
     * 书单
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function booklist()
    {

        $categories = Category::all();
        $recent_articles = Article::latest()->limit(6)->get();
        return view('booklist', compact( 'categories', 'recent_articles'));
    }
}
