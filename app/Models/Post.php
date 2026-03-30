<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    // $post->comments
    public function comments() //commentsという関数を定義
    {

    return $this->hasMany(Comment::class); //$this(この投稿)はCommentsをたくさん持っている
    }
}
