<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function index($user)
    {
        //dd($user);
       $user = User::findOrFail($user);
       //dd($user);
        return view('home',[
            'user'=>$user,
        ]);
    }
}
