<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Cache;

class GeneratedController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function siteMap() : object
    {
        $articles = Article::get();
        return response()->view('generated.sitemap', compact('articles'))->header('Content-Type', 'text/xml');
    }

    /**
     * RSS feed
     * @return \Illuminate\Http\Response
     */
    public function feed() : object
    {
        $posts = Article::get();
        return response()->view('generated.feed', compact('posts'))->header('Content-Type', 'text/xml');
    }
}
