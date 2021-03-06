<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
