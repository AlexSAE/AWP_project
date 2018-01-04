<?php

namespace App\Http\Controllers\;

use Illuminate\Http\Request;
///profup
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
////
class PortfolioController extends Controller
{
    /**
     * Show the profile for the given user.
     */
    
        return porfile::all();

    // public function index($slug){

    //     return view('profile.index')->with('data', Auth::user()->profile);
    // }

    //profup    
    public function uploadPhoto(Request $request) {

        $file = $request->file('pic');
        $filename = $file->getClientOriginalName();

        $path = 'public/img';

        $file->move($path, $filename);
        $user_id = Auth::user()->id;

        DB::table('users')->where('id', $user_id)->update(['pic' => $filename]);
        return view('profile.index');
        return back();
    }

    // public function editProfileForm() {
    //     return view('profile.editProfile')->with('data', Auth::user()->profile);
    // }
    // /////////
    // public function updateProfile(Request $request) {

    //     $user_id = Auth::user()->id;

    //     DB::table('profiles')->where('user_id', $user_id)->update($request->except('_token'));
    //     return back();
    // }




    /////
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        return view('portfolio.balde', ['portfolio'=>$portfolio]);
    //     return view('posts.show', ['post'=>$post]);
    }
};
