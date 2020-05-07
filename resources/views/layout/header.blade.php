<header class="header">
    <div class="title">
        <a href="/">Joker 的博客</a>
        <p>Do more and think less</p>
    </div>
    @switch(request()->segment(1))
        @case('booklist')
            <div class="nav-menu">
                <a href="/">
                    <img src="{{ asset('uploads/home.png') }}" alt=""  />
                    <span>首页</span>
                </a>
                <a class="current" href="/booklist">
                    <img src="{{ asset('uploads/booklist.png') }}" alt=""  />
                    <span>书单</span>
                </a>
                <a href="/archive">
                    <img src="{{ asset('uploads/archive.png') }}" alt=""  />
                    <span>归档</span>
                </a>
                <a href="/about">
                    <img src="{{ asset('uploads/about.png') }}" alt=""  />
                    <span>关于</span>
                </a>
                <a href="/generated/feed" target="_blank" rel="feed" type="application/rss+xml" title="Feed">
                    <img src="{{ asset('uploads/subscription.png') }}" alt=""  />
                    <span>订阅</span>
                </a>
            </div>
            @break
        @case('archive')
            <div class="nav-menu">
                <a href="/">
                    <img src="{{ asset('uploads/home.png') }}" alt=""  />
                    <span>首页</span>
                </a>
                <a href="/booklist">
                    <img src="{{ asset('uploads/booklist.png') }}" alt=""  />
                    <span>书单</span>
                </a>
                <a class="current" href="/archive">
                    <img src="{{ asset('uploads/archive.png') }}" alt=""  />
                    <span>归档</span>
                </a>
                <a href="/about">
                    <img src="{{ asset('uploads/about.png') }}" alt=""  />
                    <span>关于</span>
                </a>
                <a href="/generated/feed" target="_blank" rel="feed" type="application/rss+xml" title="Feed">
                    <img src="{{ asset('uploads/subscription.png') }}" alt=""  />
                    <span>订阅</span>
                </a>
            </div>
            @break
        @case('about')
            <div class="nav-menu">
                <a href="/">
                    <img src="{{ asset('uploads/home.png') }}" alt=""  />
                    <span>首页</span>
                </a>
                <a href="/booklist">
                    <img src="{{ asset('uploads/booklist.png') }}" alt=""  />
                    <span>书单</span>
                </a>
                <a href="/archive">
                    <img src="{{ asset('uploads/archive.png') }}" alt=""  />
                    <span>归档</span>
                </a>
                <a class="current" href="/about">
                    <img src="{{ asset('uploads/about.png') }}" alt=""  />
                    <span>关于</span>
                </a>
                <a href="/generated/feed" target="_blank" rel="feed" type="application/rss+xml" title="Feed">
                    <img src="{{ asset('uploads/subscription.png') }}" alt=""  />
                    <span>订阅</span>
                </a>
            </div>
            @break
        @case('generated')
            <div class="nav-menu">
                <a href="/">
                    <img src="{{ asset('uploads/home.png') }}" alt=""  />
                    <span>首页</span>
                </a>
                <a href="/booklist">
                    <img src="{{ asset('uploads/booklist.png') }}" alt=""  />
                    <span>书单</span>
                </a>
                <a href="/archive">
                    <img src="{{ asset('uploads/archive.png') }}" alt=""  />
                    <span>归档</span>
                </a>
                <a href="/about">
                    <img src="{{ asset('uploads/about.png') }}" alt=""  />
                    <span>关于</span>
                </a>
                <a class="current" href="/generated/feed" target="_blank" rel="feed" type="application/rss+xml" title="Feed">
                    <img src="{{ asset('uploads/subscription.png') }}" alt=""  />
                    <span>订阅</span>
                </a>
            </div>
            @break
        @default
            <div class="nav-menu">
                <a class="current" href="/">
                    <img src="{{ asset('uploads/home.png') }}" alt=""  />
                    <span>首页</span>
                </a>
                <a href="/booklist">
                    <img src="{{ asset('uploads/booklist.png') }}" alt=""  />
                    <span>书单</span>
                </a>
                <a href="/archive">
                    <img src="{{ asset('uploads/archive.png') }}" alt=""  />
                    <span>归档</span>
                </a>
                <a href="/about">
                    <img src="{{ asset('uploads/about.png') }}" alt=""  />
                    <span>关于</span>
                </a>
                <a href="/generated/feed" target="_blank" rel="feed" type="application/rss+xml" title="Feed">
                    <img src="{{ asset('uploads/subscription.png') }}" alt=""  />
                    <span>订阅</span>
                </a>
            </div>
        @break
    @endswitch
</header>
