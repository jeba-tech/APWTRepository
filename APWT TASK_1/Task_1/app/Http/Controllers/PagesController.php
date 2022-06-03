<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
   

    public function profile(){
        
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('profile')
        
        ->with('names', $names);
    }
}
