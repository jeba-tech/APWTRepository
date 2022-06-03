<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function productList(){
        $student = array();

        for($i=0; $i<5; $i++){
            $student = array(
                "name" => "Product " . ($i+1),
                "id" =>"00" . ($i+1)

            );
            $students[] = (object)$student; 
        }

        return view('student.productList')->with('students', $students);
    }
    public function productEdit(Request $request){
        return $request->name;
    }

    public function contactUs(){
        return view('student.contactUs');
    }
    public function contactUsSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'text'=>"required|max:30"
        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }

}
