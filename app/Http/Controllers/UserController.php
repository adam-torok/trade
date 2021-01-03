<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {   
        $user = $user;
        return view('layouts.profile.show',compact('user'));
    }
}
