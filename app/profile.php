<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['about', 'skils' ,'languages', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\user');
    }
    
};