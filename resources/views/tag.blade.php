<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    <title>tags -- Joker的博客</title>
</head>
<body>
<div class="box">
    <header class="header">
        <div class="title">
            <a href="/">Joker 的博客</a>
        </div>
        <div class="nav-menu">
            <a class="current" href="/">
                <img src="{{ asset('uploads/home.png') }}" alt="" />
                <span>首页</span>
            </a>
            <a href="/archive">
                <img src="{{ asset('uploads/archive.png') }}" alt="" />
                <span>归档</span>
            </a>
            <a href="/tags">
                <img src="{{ asset('uploads/sign.png') }}" alt="" />
                <span>标签</span>
            </a>
            <a href="/about">
                <img src="{{ asset('uploads/about.png') }}" alt="" />
                <span>关于</span>
            </a>
            <a href="/rss" target="_blank">
                <img src="{{ asset('uploads/subscription.png') }}" alt="" />
                <span>订阅</span>
            </a>
        </div>
    </header>
    <main>
        <div class="left-main">

        </div>
        <div class="right-main">
            <div class="sidebar">
                <div class="widget">
                    <label for=""><input type="text" placeholder="Search" class="search"></label>
                </div>
                <div class="widget">
                    <div class="category">
                        <div><img src="{{ asset('uploads/category.png') }}" alt=""/>分类</div>
                    </div>
                    <ul class="category-list">
                        @foreach($categories as $val)
                            <li><a href="{{ url()->current() }}/{{ $val->name }}">{{ $val->name }}</a></li>
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
    <footer>
        <div class="footer-info">
            <strong><a href="http://beian.miit.gov.cn" target="_blank">粤ICP备19072363号</a></strong>
        </div>
        <div class="footer-info">
            <strong>Powered By <a href="https://laravel.com/" style="color: #ff2d20">Laravel7</a></strong>
        </div>
        <div class="footer-info">
            <strong>©2019-2020 Joker</strong>
        </div>
    </footer>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
