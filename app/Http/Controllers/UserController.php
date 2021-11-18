<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){

        /*
        $user  = new User();
        $user->name = "Fedner Dabady";
        $user->email = "fednerdab@gmail.com";
        $user->password = Hash::make('123');
        $user->save();
        */

        $user = User::where('id', '=', 1)->first();
        //dd($user);
    return view('listUser',[
        'user'=>$user
    ]);

       // echo "<h1>Listagem de usuario</h1>";

    }
}
