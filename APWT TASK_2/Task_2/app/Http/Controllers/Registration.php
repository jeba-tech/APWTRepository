<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    //
    public function registration(){
        return view('product.registration');
    }
    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required|min:8'

        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }
}
