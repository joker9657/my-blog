<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Joker的博客</title>
    <style type="text/css">
        body {
            margin: 0;
        }
        .box {
            max-width: 1280px;
            margin: 0 auto;
        }
        .header {
            padding: 50px 0 0;
            text-align: left;
            border-bottom: 1px solid #ddd;
            position: relative;
        }
        .title {
            margin-bottom: 2.5rem;
        }
        .title a {
            font-size: 2.25rem;
            color: #2d3748;
        }
        .nav-menu {
            margin: 10px 0 -1px;
            padding: 0;
            position: absolute;
            right: 30px;
            bottom: 0;
            font-size: 14px;
        }
        .nav-menu a {
            display: inline-block;
            padding: .5rem 1.25rem;
        }
        .nav-menu a img {
            display: inline-block;
            width: 1rem;
            margin-bottom: -.15rem;
        }
        .nav-menu a span {
            display: inline-block;
        }
        .current {
            border: 1px solid #ddd;
            border-bottom-color: #fff;
        }
        main {
            display: flex;
        }
        .left-main {
            width: 75%;
        }
        .right-main {
            width: 25%;
        }
        .left-main-box {
            padding-right: 2rem;
            padding-top: .5rem;
        }
        .post {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
        .post-title {
            color: #555;
            font-size: 1.5rem;
            text-align: left;
        }
        .post-meta {
            margin-top: 1rem;
            display: inline-block;
        }
        .post-meta span {
            color: #4a5568;
        }
        .post-content {
            color: #444;
            overflow-wrap: normal;
            word-break: normal;
            font-size: 1rem;
            text-align: justify;
            padding-top: 1.25rem;
            line-height: 1.5;
        }
        .date-img {
            width: 1.25rem;
            margin-bottom: -0.25rem;
            display: inline-block;
        }
        .readmore {
            margin: 1rem;
        }
        .readmore a {
            font-size: 1rem;
            padding: .25rem .5rem;
            margin-top: 0.25rem;
            margin-bottom: 0.25rem;
            float: right;
            border-width: 1px;
            border-radius: 0.25rem;
            border-color: #e2e8f0;
        }
        .sidebar {
            border-left: 1px solid #ddd;
            padding-left: 35px;
            margin-top: 40px;
            padding-bottom: 20px;
            word-wrap: break-word;
        }
        .widget {
            margin-bottom: 20px;
        }
        .search {
            padding: 7px 11px 7px 28px;
            line-height: 16px;
            border: 1px solid #bbb;
            width: 65%;
            border-radius: 5px;
            box-shadow: none;
        }
        .pagination {
            border-top: 1px solid #ddd;
            width: 45rem;
            background: #fdfdfd;
            padding: 1rem;
            margin: 3rem auto;
            border-radius: 0.2rem;
            counter-reset: pagination;
            text-align: center;
            font-size: 1.125rem;
        }
        .pagination:after {
            clear: both;
            content: "";
            display: table;
        }
        .pagination ul {
            width: 100%;
        }

        .pagination ul {
            list-style: none;
            display: inline;
            padding-left: 0;
        }
        .pagination li {
            list-style: none;
            display: inline;
            padding-left: 0;
        }
        .pagination li:hover a {
            color: #fdfdfd;
            background-color: #1d1f20;
            border: solid 1px #1d1f20;
        }
        .pagination li.active a {
            color: #fdfdfd;
            background-color: #1d1f20;
            border: solid 1px #1d1f20;
        }
        .pagination li a {
            border: solid 1px #d6d6d6;
            border-radius: 0.2rem;
            color: #7d7d7d;
            text-decoration: none;
            text-transform: uppercase;
            display: inline-block;
            text-align: center;
            padding: 0.5rem 0.9rem;
        }
        .pagination li span {
            border: solid 1px #d6d6d6;
            border-radius: 0.2rem;
            color: #7d7d7d;
            text-decoration: none;
            text-transform: uppercase;
            display: inline-block;
            text-align: center;
            padding: 0.5rem 0.9rem;
        }
        .pagination li:first-child a {
            display: inline-block;
        }
        .pagination li:first-child span:after {
            content: "<";
        }
        .pagination li:last-child span:after {
            content: ">";
        }
        .pagination li:first-child a:after {
            content: "<";
        }
        .pagination li:last-child a:after {
            content: ">";
        }
        .pagination li:nth-last-child(3):after {
            padding: 0 1rem;
            content: "...";
        }
        .category {
            line-height: 2.5rem;
            border-bottom-width: 1px;
            border-color: #4a5568;
        }
        .category div {
            display: inline-block;
        }
        .category div img {
            width: 1rem;
            display: inline-block;
            margin-bottom: -.15rem;
            margin-right: .5rem;
        }
        .category-list {
            list-style: none;
            margin: 0;
            padding: .25rem 0 0;
        }
        .category-list li {
            overflow: hidden;
            text-overflow:ellipsis;
            white-space: nowrap;
            margin: .5rem 0;
        }
        .recent {
            line-height: 2.5rem;
            border-bottom-width: 1px;
            border-color: #4a5568;
        }
        .recent div {
            display: inline-block;
        }
        .recent div img {
            width: 1rem;
            display: inline-block;
            margin-bottom: -.15rem;
            margin-right: .5rem;
        }
        .recent-list {
            list-style: none;
            margin: 0;
            padding: .25rem 0 0;
        }
        .recent-list li {
            overflow: hidden;
            text-overflow:ellipsis;
            white-space: nowrap;
            margin: .5rem 0;
        }
        footer {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
            display: flex;
        }
        .footer-info {
            width: 33.333333%;
            color: #4a5568;
        }
    </style>
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
            <div class="left-main-box">
                <div class="post">
                    <h1 class="post-title">
                        <a href="/t/{{ $article->slug }}">{{ $article->title }}</a>
                    </h1>
                    <div class="post-meta">
                        <img src="{{ asset('uploads/date.png') }}" alt="" class="date-img" />
                        <span>{{ $article->created_at->format('Y-m-d') }}</span>
                    </div>
                    <div class="post-content ">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
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
                            <li><a href="/t/{{ $recent->slug }}">{{ $recent->title }}</a></li>
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
</html>
