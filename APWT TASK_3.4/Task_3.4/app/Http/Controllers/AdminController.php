<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }






    public function adminRegistration(){
        return view('adminRegistration');
    }
    public function adminRegistrationSubmitted(Request $request){
        $validate = $request->validate([
    
            'email'=>'required|email|string',
            'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required|min:8'

        ],
        [
         'string'=>"Values must be string"
        ]
    );

        $admin = new Admin();
        $admin->email= $request->email;
        $admin->phone= $request->phone;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('adminLogin');
    }
    
    public function adminLogin(){
        return view('adminLogin');
    }
    public function adminLoginSubmitted(Request $request){
        $validate = $request->validate([
            'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required|min:8'

        ],
      
    );
         
    $admin = Admin::where('phone',$request->phone)
    ->where('password',$request->password)
    ->first();

if($admin){
$request->session()->put('user',$admin->phone);
return redirect()->route('adminDash');
}
 else{
    return redirect()->route('failedLogin');
 }



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
    
    public function adminDash(){
        return view('adminDash');

    }


}
