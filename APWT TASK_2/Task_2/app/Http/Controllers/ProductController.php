<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productList(){
        $product = array();

        for($i=0; $i<5; $i++){
            $product = array(
                "name" => "Product " . ($i+1),
                "id" =>"00" . ($i+1)

            );
            $products[] = (object)$product; 
        }

        return view('product.productList')->with('products', $products);
    }
    public function productEdit(Request $request){
        return $request->name;
    }

    public function contactUs(){
        return view('product.contactUs');
    }
    public function contactUsSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'required|email',
            'text'=>"required|max:30"
        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }

}
