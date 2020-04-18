<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static orderBy(string $string, string $string1)
 */
class Article extends Model
{
    use SoftDeletes;
    protected $table = 'articles';

    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected static function booted()
    {
        static::created(function ($article) {
            $redis = app()->get('redis');
            $redis->connect('127.0.0.1', '6379');
            $redis->zAdd('view_count', 0, 'article:' . $article->id); // 初始化文章的浏览量
        });
    }



    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id');
    }
}
