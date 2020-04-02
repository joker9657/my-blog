<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/core.js"></script>
    <style>
        .header {
            padding: 50px 0 0;
            text-align: left;
            border-bottom: 1px solid #ddd;
            position: relative;
        }
        .nav-menu {
            margin: 10px 0 -1px;
            padding: 0;
            position: absolute;
            right: 30px;
            bottom: 0;
            font-size: 14px;
        }
        .current {
            border: 1px solid #ddd;
            border-bottom-color: #fff;
        }
        .post-title {
            color: #555;
        }
        .post-content {
            color: #444;
        }
        .sidebar {
            border-left: 1px solid #ddd;
            padding-left: 35px;
            margin-top: 40px;
            padding-bottom: 20px;
            word-wrap: break-word;
        }
        .widget {
            margin-bottom: 30px;
        }
        .search {
            padding: 7px 11px 7px 28px;
            line-height: 16px;
            border: 1px solid #bbb;
            width: 65%;
            border-radius: 5px;
            box-shadow: none;
        }
    </style>
</head>
<body>
<div class="m-0 mx-auto max-w-screen-lg">
    <header class="relative pt-12 text-left border-b header">
        <div class="mb-10">
            <a href="/." class="text-gray-800 text-4xl">Joker 的博客</a>
        </div>
        <div class="nav-menu">
            <a class="inline-block py-2 px-5 border border-transparent current" href="/.">
                <img src="{{ asset('uploads/home.png') }}" alt="" class="w-4 inline-block mb-1" />
                <span>首页</span>
            </a>
            <a class="inline-block py-2 px-5 border border-transparent" href="/tags/">
                <img src="{{ asset('uploads/archive.png') }}" alt="" class="w-4 inline-block mb-1" />
                <span>归档</span>
            </a>
            <a class="inline-block py-2 px-5 border border-transparent" href="/tags/">
                <img src="{{ asset('uploads/sign.png') }}" alt="" class="w-4 inline-block mb-1" />
                <span>标签</span>
            </a>
            <a class="inline-block py-2 px-5 border border-transparent" href="/tags/">
                <img src="{{ asset('uploads/about.png') }}" alt="" class="w-4 inline-block mb-1" />
                <span>关于</span>
            </a>
            <a class="inline-block py-2 px-5 border border-transparent" href="/tags/">
                <img src="{{ asset('uploads/subscription.png') }}" alt="" class="w-4 inline-block mb-1" />
                <span>订阅</span>
            </a>
        </div>
    </header>
    <main class="flex">
        <div class="w-3/4 h-screen">
            <div class="pr-8 pt-2">
                <div class="post py-10">
                    <h1 class="post-title m-0 text-left  text-2xl">
                        <a href="">殊途</a>
                    </h1>
                    <div class="post-meta inline-block mt-4">
                        <img src="{{ asset('uploads/date.png') }}" alt="" class="w-5 inline-block mb-1" />
                        <span class="text-gray-700">订阅</span>
                    </div>
                    <div class="post-content text-base leading-normal pt-5 text-justify break-normal">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/4 h-screen">
            <div class="sidebar">
                <div class="widget">
                    <input type="text" placeholder="Search" class="search">
                </div>
                <div class="widget">
                    <div class="border-b border-gray-700 leading-10">
                        <div class="inline-block">
                            <img src="{{ asset('uploads/category.png') }}" alt="" class="w-4 inline-block mb-1"/>分类
                        </div>
                    </div>
                    <ul class="py-5">
                        <li>
                            <a href="">PHP</a>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <div class="border-b border-gray-700 leading-10">
                        <div class="inline-block">
                            <img src="{{ asset('uploads/article.png') }}" alt="" class="w-4 inline-block mb-1"/>最近文章
                        </div>
                    </div>
                    <ul class="py-5">
                        <li>
                            <a href="">PHP</a>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <div class="border-b border-gray-700 leading-10">
                        <div class="inline-block">
                            <img src="{{ asset('uploads/link.png') }}" alt="" class="w-4 inline-block mb-1"/>友链
                        </div>
                    </div>
                    <ul class="py-5">
                        <li>
                            <a href="">PHP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex py-10">
        <div class="w-1/3 text-gray-700">
            <strong>
                <a href="http://beian.miit.gov.cn" target="_blank">粤ICP备19072363号</a>
            </strong>
        </div>
        <div class="w-1/3 text-gray-700">
            <strong>
                Powered By <a href="https://laravel.com/" class="text-blue-400">Laravel7</a>
            </strong>
        </div>
        <div class="w-1/3 text-gray-700">
            <strong>
                ©2019-2020 Joker
            </strong>
        </div>
    </footer>
</div>
</body>
<script>
</script>
</html>
