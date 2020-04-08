<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ config('app.url') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach ($articles as $article)
        <url>
            <loc>{{ config('app.url') . '/posts/' . $article->slug }}</loc>
            <lastmod>{{ $article->updated_at->tz('UTC')->toDateString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>
