<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
   

    public function team(){
        
        $names=array("Mr. Jamal", "Ms. Rina", "Mr. Reza");
        return view('team')
        
        ->with('names', $names);
    }
}
