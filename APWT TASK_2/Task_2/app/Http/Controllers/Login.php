<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    public function login(){
        return view('product.login');
    }
    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'password'=>'required|min:8'

        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }
}
