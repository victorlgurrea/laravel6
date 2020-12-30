<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = [
        'post_id',
        'image'
    ];

    /**
    * Get the post's category.
    */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
