<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'thread_id', 'user_id', 'text',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    // TODO: mozes a nem moras da napravis thread relaciju... msm da ti nije potrebna

    public function thread() 
    {
        return $this->belongsTo(Thread::class);
     }

    // TODO: Edituj migraciju!! - napisao sam ti gore i fillable sta treba da se doda

    // public function post()
    // {
    //     $this->belongsTo(Post::class);
    // }
}
