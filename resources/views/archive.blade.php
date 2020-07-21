@extends('layout.app')
@section('main')
    <main>
        <div class="left-main">
            <div class="left-main-box">
                <div class="post">
                    <ul class="archive-post">
                        @foreach($articles as $article)
                            <li><a href="/posts/{{ $article->slug }}"><span>{{ $article->created_at->format('Y-m-d') }}</span>&ensp;&ensp;{{ $article->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-main">
            <div class="sidebar">
                <div class="search-button">
                    <form action="https://www.google.com/search" onsubmit="return search()" id="search-form" method="get" target="_blank">
                        <label for="">
                            <input type="text" placeholder="Search" class="search" id="search-input">
                            <input type="hidden" name="q" id="hidden-input">
                        </label>
                    </form>
                </div>
                <div class="widget">
                    <div class="category">
                        <div><img src="{{ asset('uploads/category.png') }}" alt=""/>分类</div>
                    </div>
                    <ul class="category-list">
                        @foreach($categories as $val)
                            <li><a href="/{{ $val->name }}">{{ $val->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <div class="recent">
                        <div><img src="{{ asset('uploads/article.png') }}" alt=""/>最近文章</div>
                    </div>
                    <ul class="recent-list">
                        @foreach($recent_articles as $recent)
                            <li><a href="/posts/{{ $recent->slug }}">{{ $recent->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <div class="recent">
                        <div><img src="{{ asset('uploads/link.png') }}" alt=""/>友链</div>
                    </div>
                    <ul class="recent-list">
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@stop
