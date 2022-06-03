<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
   

    public function team(){
        
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('team')
        
        ->with('names', $names);
    }
}
