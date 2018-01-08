<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\profile;


class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'pic', 'email', 'slug', 'password', 'type_id', 
    ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeEmployers($query)
    {
        return $this->where('type_id', 1);
    }

    public function scopeTranslators($query)
    {
        return $this->where('type_id', 2);
    }


    ///


    
};
