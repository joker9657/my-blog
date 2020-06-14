<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';

    const HIDDEN_CATEGORY = 4;

    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
