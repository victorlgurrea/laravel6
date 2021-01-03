<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'url_clean',
    ];

    /**
    * Get the post's category.
    */
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
