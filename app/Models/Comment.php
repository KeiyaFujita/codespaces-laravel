<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'post_id',
    ];

    // $comment->post
public function post()
{
    return $this->belongsTo(Post::class); //Postクラスの名前を渡す
}

}
