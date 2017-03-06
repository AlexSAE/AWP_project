<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'languages', 'description'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function  messages()
    {
        $this->hasMany(Message::class);
    }
}
