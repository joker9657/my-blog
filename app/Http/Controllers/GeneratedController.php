<?php

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Support\Facades\Cache;

class GeneratedController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function siteMap()
    {
        $articles = Article::get();
//        $view = Cache::remember('generated.sitemap', function () {
//            $posts = Post:all();
//        // return generated xml (string) , cache whole file
//        return view('generated.sitemap', compact('posts'))->render();
//    });
        return response()->view('generated.sitemap', compact('articles'))->header('Content-Type', 'text/xml');
    }

//    public function feed()
//    {
//        $view = chche()->remember('generated.sitemap', function () {
//                $posts = Post:all();
//            // return generated xml (string) , cache whole file
//            return view('generated.feed', compact('posts'))->render();
//        });
//        return response($view)->header('Content-Type', 'text/xml');
//    }
}
