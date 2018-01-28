<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class PortfolioController extends Controller
{
    /**
     * Show the profile for the given user.
     */
    public function index()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        return redirect('/portfolio/' . Auth::user()->id);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function uploadPhoto(Request $request)
    {

        $file = $request->file('pic');
        $filename = $file->getClientOriginalName();

        $path = 'public/img';

        $file->move($path, $filename);
        $user_id = Auth::user()->id;

        DB::table('users')->where('id', $user_id)->update(['pic' => $filename]);

        return view('profile.index');

        return back();
    }

    /**
     * @return $this
     */
    public function editProfileForm($id)
    {
        if(Auth::user()->id != $id){
            exit('Access denied.');
        }

        $user = User::find(intval($id));

        if (!$user) {
            return view('pages.not_found');
        }

        return view('pages.editprofile', ['user' => $user]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
     public function updateProfile(Request $request) {

         $user = User::find(Auth::user()->id);

         if(!$user){
             exit('Invalid user.');
         }

         if (empty($request->file('pic'))) {
            $user->pic = "";
         } else {
            $result = \Storage::disk('local')->put('img', $request->file('pic'));
            $user->pic = '/' . $result;
         }

         $user->name = $request->name;
         $user->about = $request->about;
         $user->languages = $request->langs;

         $user->save();

         return redirect('/portfolio/' . $user->id);
     }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(intval($id));

        if (!$user) {
            return view('pages.not_found');
        }

        return view('pages.portfolio', ['user' => $user]);
    }
}
