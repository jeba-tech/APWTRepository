<?php

namespace App\Http\Controllers;


use App\Models\LoginModel;
use App\Models\Customer;
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
            'email'=>'required|email',
            'password'=>'required|min:8'

        ],
        ['name.required'=>"Please put you name here"]
    );
         
    $customer = Customer::where('name',$request->name)
    ->where('email',$request->email)
    ->where('password',$request->password)
    ->first();

if($customer){
$request->session()->put('user',$customer->name);
return redirect()->route('customerDash');
}
 else{
    return redirect()->route('failedLogin');
 }
    }

    public function customerDash(){
        return view('product.customerDash');

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
    public function failedLogin(){
        return view('failedLogin');

    }
    public function ok(){
        return redirect()->route('login');

    }
}
