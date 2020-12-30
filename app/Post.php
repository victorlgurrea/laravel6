<?php

namespace App;

use App\Category;
use App\PostImage;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'url_clean',
        'content',
        'category_id',
        'posted'
    ];

    /**
    * Get the post's category.
    */
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    /**
    * Get the post's image.
    */
    public function image()
    {
        return $this->hasOne(PostImage::class)->withDefault();
    }
}
