<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class Registration extends Controller
{
    //
    public function registration(){
        return view('product.registration');
    }
    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20|string",
            "id"=>"required|integer",
            'dob'=>'required|date',
            'email'=>'required|email|string',
            'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required|min:8'

        ],
        ['name.required'=>"Please put you name here",
         'string'=>"Values must be string"
        ]
    );

        $customer = new Customer();
        $customer->name= $request->name;
        $customer->cus_id= $request->id;
        $customer->dob= $request->dob;
        $customer->email= $request->email;
        $customer->phone= $request->phone;
        $customer->password = $request->password;
        $customer->save();
        return redirect()->route('login');
    }
   
}
