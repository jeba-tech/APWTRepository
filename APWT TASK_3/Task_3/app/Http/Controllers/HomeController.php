<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $website = "Website";

        return view('home')->with('website', $website);
    }
}
