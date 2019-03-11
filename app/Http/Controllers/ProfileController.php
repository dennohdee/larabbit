<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    //not used
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('profile');
    }
    public function getProfiles(){
        $users= Profile::all()->where('id', \Auth::id());
        return view('profile',compact('users')); 
        }
}
