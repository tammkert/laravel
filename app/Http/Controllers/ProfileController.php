<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProfileController extends Controller
{
    public function index($user){
        $user = User::findorFail($user);
        return view ('profile',[
            'user'=>$user
        ]);
}

}
