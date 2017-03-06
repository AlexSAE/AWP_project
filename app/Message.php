<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'text',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function post()
    {
        $this->belongsTo(Post::class);
    }
}
