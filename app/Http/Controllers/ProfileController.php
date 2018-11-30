<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('profile');
    }
    public function getProfiles(){
        $users= Profile::all(); 
        return view('profile',compact('users')); 
        }
}
