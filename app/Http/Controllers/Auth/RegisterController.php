<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'languages' => 'string',
            'type' => 'required|in:Translator,Employers',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create()
    {

        $data = request(['name', 'email', 'password', 'type_id']);
        $pic_path = 'user.png';
        // dd($data);
        $user = User::create([
            'name' => $data['name'],
            'pic'=> $pic_path,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'languages' => @$data['languages'],
            'type_id' => $data['type_id'],
        ]);


        Profile::create(['user_id' => $user->id]);
        return $user;
       
    }

   public function user()
    {
        return $this->belongsTo('App\User');
    }
}
