<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function users()
    {
        return view('users');
    }
    public function getUsers()
    {
        $users = User::all();
        return view('users',compact('user'));
    }
}
