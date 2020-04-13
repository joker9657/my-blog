<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>Joker的博客</title>
        <description>Do more and think less</description>
        <link>{{ url('/') }}</link>
        <atom:link href="{{ url('/generated/feed') }}" rel="self" type="application/rss+xml"/>
        <?php
        $date = !empty($posts) ? $posts[0]->updated_at->format('D, d M Y H:i:s O') : date("D, d M Y H:i:s O", time())
        ?>
        <pubDate>{{ $date }}</pubDate>
        <lastBuildDate>{{ $date }}</lastBuildDate>
        <generator>joker</generator>
        @foreach ($posts as $post)
        <item>
            <title>{{ $post->title }}</title>
            <link>{{ url('/posts/' .$post->slug) }}</link>
            <description>{{ $post->introduction }}</description>
            <pubDate>{{ $post->created_at->format('D, d M Y H:i:s O') }}</pubDate>
            <guid>{{ url('/posts/' .$post->slug) }}</guid>
            <category>{{ $post->category->name }}</category>
        </item>
        @endforeach
    </channel>
</rss>
