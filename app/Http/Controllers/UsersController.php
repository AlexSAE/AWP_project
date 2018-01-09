<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
  

class UsersController extends Controller
{
    public function getEmployers()
    {
        return User::employers()->get();
    }

    public function getTranslators()
    {
        return User::translators()->get();
    }

    public function findTranslatorsFor($lang)
    {
        return User::translators()->whereRaw("FIND_IN_SET('$lang',languages)")->get();
    }

    public function contactUser(Request $request)
    {
        Mail::send('emails.reminder', ['data' => $request], function ($m) use ($request) {
            $m->from('contact@app.com', 'Translation service');

            $m->to($request->to)->subject($request->subject);
        });
    }

    public function store()
    {
        $rules = array(
            'name' => 'required|unique:users',
            'password' => 'required|min:6',
            'password-repeat' => 'required|same:password',
        );

        $validator = Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withInput()
                ->withErrors($Validator->messages());
        }

        User::create


    }

    public function show($id)
    {
        $user = User::find($id);

        if ($user == null) return Redirect::to('users');

        return View::make('profile.index')->withUser($user);
    }

    // public function index()
    // {
    //     return View::make('home');
    // }
   
}
