<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about(){

        $us = "Us";

        return view('about')->with('us', $us);
    }
}
