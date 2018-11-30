<?php
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\User; 

 
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
    //diplay users
    public function getUsers() 
    { 

        $users = User::all(); 
        return view('users',compact('users')); 
    } 
    public function getMe() 
    { 

        $users = User::all()->where('name','Dearl'); 
        return view('profile',compact('users')); 
    } 
}



