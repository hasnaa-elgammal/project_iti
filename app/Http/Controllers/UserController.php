<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile($id){
        $user= User::findOrFail($id);
        return view('users.profile', compact('user'));
    }
}
