@extends('layout.app')
@section('main')
    <main>
        <div class="left-main">
            <div class="left-main-box">
                <div class="booklist">
                    <span>技术向</span>
                    <ul>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/30357170//" target="_blank">我的第一本算法书</a>」</span>&nbsp;<span class="booklist-author">[日]石田保辉/[日]宮崎修一</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/26979890//" target="_blank">算法图解</a>」</span>&nbsp;<span class="booklist-author">[美]Aditya Bhargava [译]袁国忠</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/25863515//" target="_blank">图解HTTP</a>」</span>&nbsp;<span class="booklist-author">[日] 上野宣 [译]于均良</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/26284823//" target="_blank">Docker技术入门与实战</a></span>&nbsp;<span class="booklist-author">杨保华/戴王剑/曹亚仑</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/30410340//" target="_blank">DevOps和自动化运维实践</a>」</span>&nbsp;<span class="booklist-author">余洪春</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/27016319//" target="_blank">程序员的自我修养</a>」</span>&nbsp;<span class="booklist-author">陈逸鹤</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/23008813//" target="_blank">高性能MySQL</a>」</span>&nbsp;<span class="booklist-author">施瓦茨(Baron Schwartz)/扎伊采夫(Peter Zaitsev)/特卡琴科(Vadim Tkachenko)</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/26849801//" target="_blank">Laravel框架关键技术解析</a>」</span>&nbsp;<span class="booklist-author">陈昊/陈远征/陶业荣</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/6559267//" target="_blank">深入PHP面向对象、模式与实践</a>」</span>&nbsp;<span class="booklist-author">[美]Matt Zandstra [译]陈浩/吴孙滨/胡丹/李静</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/26612779//" target="_blank">Redis实战</a>」</span>&nbsp;<span class="booklist-author">[美]Josiah L.Carlson [译]黄健宏</span></li>
                    </ul>
                    <span>理财向</span>
                    <ul>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/30314653//" target="_blank">韭菜的自我修养</a>」</span>&nbsp;<span class="booklist-author">李笑来</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/30784282//" target="_blank">解读基金——我的投资观与实践</a>」</span>&nbsp;<span class="booklist-author">季凯帆 / 康峰</span></li>
                    </ul>
                    <span>其他</span>
                    <ul>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/1013208//" target="_blank">如何阅读一本书</a>」</span>&nbsp;<span class="booklist-author">[美] 莫提默·J.艾德勒/查尔斯·范多伦 [译]郝明义/朱衣</span></li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/27071913//" target="_blank">刻意学习</a>」</span>&nbsp;<span class="booklist-author">Scalers</span></li>
                    </ul>
                </div>
            </div>
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
@stop
