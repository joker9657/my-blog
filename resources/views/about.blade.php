<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
@extends('layout.app')
@section('main')
    <main>
        <div class="left-main">
            <h1>woami</h1>
{{--            <p>生于广东惠州</p>--}}
{{--            <p>瘦弱似条竹竿</p>--}}
{{--            <p>广州不知名二本毕业</p>--}}
{{--            <p>至今仍是三流码农</p>--}}
            <span id="typed" style="white-space: pre-wrap;line-height: 30px;"></span>
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
                            <li><a href="/{{ $val['name'] }}">{{ $val['name'] }}</a></li>
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
<script !src="">
    window.onload = function () {
        let options = {
            strings: [
                '18年羊城不知名本科毕业，一直从事后端开发，熟练掌握 Linux/\Nginx/\PHP/\MySQL/\Laravel/\Redis/\Docker 的拼写。',
                '喜欢上网冲浪和骑行。 ^1000',
                "这里主要记录本人技术栈相关内容，有事可以发送邮件至 zqf2102398#gmail.com。",
            ],
            typeSpeed: 100,   //打印速度
            startDelay: 300, //开始之前的延迟300毫秒
            loop: false,      //是否循环
        };
        let typed = new Typed('#typed', options);
    }
</script>
