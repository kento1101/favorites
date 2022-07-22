<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\User;

class UserController extends Controller
{
    public function users(){
        $users = User::all();
        return view('user.list',compact('users'));
    }
}
