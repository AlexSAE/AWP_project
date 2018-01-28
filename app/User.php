<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\profile;
use Illuminate\Database\Eloquent\Relations\Relation;


/**
 * @property mixed related
 */
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function therads()
    {
        return $this->hasMany(Thread::class, ['receiver_id', 'sender_id']);
    }

    

    

    //Messages
   
    public function messages()
    {
        return Message::where(function ($query) {
        return $query->where('sender_id', $this->id)->orWhere('receiver_id', $this->id);
    });
    }

    public function getMessagesAttribute()
    {
        return $this->messages()->get();
    }
    
    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    
};
