<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $fillable = [
        'user_id',
        'title',
        'description',
        'languages',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}






