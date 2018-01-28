<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
	// TODO: napravi ovu relaciju u bazi

    protected $fillable = ['sender_id', 'receiver_id', 'text'];
	
    // Thread treba da ima sender_id i receiver_id koji su foreign key-ovi ka User-u
    

	// TODO: kreni da koristis PHP storm!

    public function sender()
    {
    	// TODO: dodaj u User modelu funkciju koja ce da ti vrati sve thread-ove gde si ili sender ili receiver


    	// tu treba da se radi query nad Thread modelom ...
    	// izvadi sve thread-ove gde je sender_id ili receiver_id ulogovani korisnik
        return $threads = \Auth::user()->treads();
    	// priveri samo na laravel dokumentaciji kako se ovo pise
    	
    	return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
    	return $this->belongsTo(User::class, 'receiver_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
//    public function getConversation($from,$to){
//        $messages[] = Message::whereUserId($from)->whereProfileId($to)->get();
//        $messages[] .= Message::whereUserId($to)->whereProfileId($from)->get();
//        return  $messages;
//    }
    public function messages()
    {
    	// TODO: napravi relaciju izmedju message-a
    
        return $this->hasMany(Message::class);
    
    	// Jedan tred moze da ima vise poruka
    }
}
