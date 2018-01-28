<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ovde treba da izlistas @foreach-uj rezultate funkcije User->threads() ...ona funkcija sto sam ti rekao da napises
//        @foreach ($threads as $thread)
//            <h1>{{ $thread->user->user_id }}</h1>
//        @endforeach


        // ovo ce da ti baca error da ne postoji dok ne napises funkciju u user modelu
        // instrukcije su ti u Thread modelu

        $threads = \Auth::user()->treads();

        return view('threads', ['threads' => $threads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return view('thread.create');

        // $user_id je id user-a kojeg kontaktiras

        // taj user ud prosledis view-u i stavis tu vrednost u hidden input field da bi znao kome saljes thread

        // ovde returnujes view koji sadrzi formu za kreiranje thread-a
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: ovo lepo napravi ... podesi ko salje kome salje... 

        $thread = Thread::create([
            'sender_id' => \Auth::user()->id,\
            'receiver_id' => \Auth::user()->id,\
        ]);

        // TODO: i ovde realno mozes da napravis i message

        // Message::create(['thread_id' => $thread->id, ... ])
        Message::create(['thread_id' => $thread->id, 'user_is' => $user->id, 'text' ])

        return redirect('/threads/' . $thread->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO: prikaz jednog treda
        $thread = Auth::user()->thread;

        // trebalo bi da ogranicis da ne moze da vidi niko tred osim receiver-a i sender-a

        // preko relacije izvuces message u blade-u
        return view('messages.balde', ['thread'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // esditovanje poruka ti ne treba
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ne treba
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ne treba  ?
    }

    public function reply(Request $request, $id)
    {
        // za ovu funkciju napravi rutu u kontroleru da je gadjas sa postom

        // proveris da li je user sender ili receiver treda

        // i samo kreiras poruku kao sto je kreiras i u store moetodi

        // upisujes tred id, user id (onaj koji salje) i tekst
    }
}
