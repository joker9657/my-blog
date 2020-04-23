@extends('layout.app')
@section('main')
    <main>
        <div class="left-main">
            @foreach($articles as $article)
            <div class="left-main-box">
                <div class="post">
                    <h1 class="post-title">
                        <a href="/posts/{{ $article->slug }}">{{ $article->title }}</a>
                    </h1>
                    <div class="post-meta">
                        <img src="{{ asset('uploads/date.png') }}" alt="" class="date-img" />
                        <span>{{ $article->created_at->format('Y-m-d') }}</span>
                    </div>
                    <div class="post-content">
                        {{ $article->introduction }}
                    </div>
{{--                    <p class="readmore">--}}
{{--                        <a href="/posts/{{ $article->slug }}" >阅读全文</a>--}}
{{--                    </p>--}}
                </div>
            </div>
            @endforeach
            <nav class="pagination">
                <ul>
                    {{-- Previous Page Link --}}
                    @if (!$articles->onFirstPage())
                        <li><a href="{{ $articles->previousPageUrl() }}" rel="prev"></a></li>
                    @else
                        <li style="cursor: not-allowed;"><span></span></li>
                    @endif
                    @for($i = 1; $i <= $articles->lastPage(); $i++)
                        @if($i === $articles->currentPage())
                            <li class="active"><a href="{{ $articles->url($i) }}">{{ $i}}</a></li>
                        @else
                            <li><a href="{{ $articles->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
                    {{-- Next Page Link --}}
                    @if ($articles->currentPage() !== $articles->lastPage())
                        <li><a href="{{ $articles->nextPageUrl() }}" rel="next"></a></li>
                    @else
                        <li style="cursor: not-allowed;"><span></span></li>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="right-main">
            <div class="sidebar">
                <div class="search-button">
                    <label for=""><input type="text" placeholder="Search" class="search"></label>
                </div>
                <div class="widget">
                    <div class="category">
                        <div><img src="{{ asset('uploads/category.png') }}" alt=""/>分类</div>
                    </div>
                    <ul class="category-list">
                        @foreach($categories as $val)
                        <li><a href="{{ config('app.url') }}/{{ $val->name }}">{{ $val->name }}</a></li>
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
