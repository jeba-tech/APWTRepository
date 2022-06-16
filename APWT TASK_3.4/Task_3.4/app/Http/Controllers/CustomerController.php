<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    

    
    public function customerDash(){
        return view('product.customerDash');

    }
   
    public function customerProfile(){
       
        return view('customerProfile');
        
    }
    public function userEdit(){
       
        return view('userEdit');
      
        
    }
    public function profileInfo(){
       
        
    }
}
