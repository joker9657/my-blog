@extends('layout.app')
@section('main')
    <main>
        <div class="left-main">
            <div class="left-main-box">
                <div class="booklist">
                    <span>技术向</span>
                    <ul>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/30357170//" target="_blank">我的第一本算法书</a>」</span>  <span class="booklist-author">[日]石田保辉/[日]宮崎修一</span>  读后感</li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/26284823//" target="_blank">Docker技术入门与实战</a>」</span>  <span class="booklist-author">杨保华/戴王剑/曹亚仑</span>  读后感</li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/26979890//" target="_blank">算法图解</a>」</span>  <span class="booklist-author">[美] Aditya Bhargava [译]袁国忠</span>  读后感</li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/25863515//" target="_blank">图解HTTP</a>」</span>  <span class="booklist-author">[日] 上野宣 [<译></译>]于均良</span>  读后感</li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/30410340//" target="_blank">DevOps和自动化运维实践</a>」</span>  <span class="booklist-author">余洪春</span>  读后感</li>
                        <li><span class="booklist-title">「<a href="https://book.douban.com/subject/27016319//" target="_blank">程序员的自我修养</a>」</span>  <span class="booklist-author">陈逸鹤</span>  读后感</li>
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
