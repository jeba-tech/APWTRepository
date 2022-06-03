<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function studentList(){
        $student = array();

        for($i=0; $i<5; $i++){
            $student = array(
                "name" => "Product " . ($i+1),
                "id" =>"00" . ($i+1)

            );
            $students[] = (object)$student; 
        }

        return view('student.studentList')->with('students', $students);
    }
    public function studentEdit(Request $request){
        return $request->name;
    }

    public function studentCreate(){
        return view('student.studentCreate');
    }
    public function studentCreateSubmitted(Request $request){
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
