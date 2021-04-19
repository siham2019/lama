<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
       $this->validate($request,[
          'email'=>"required|email",
          'password'=>"required",
       ],[
           'email.required'=>'يرجى ادخال ايميل الالكتروني',
           'password.required'=> 'يرجى ادخال كلمة المرور'
       ]);
    
       $auth=Auth::attempt(['email' => $request->email, 'password' => $request->password]);
         if($auth==false)
             return back()->with('err',"تحقق من ايميل و كلمة المرور");



           return redirect()->route("dashboard");
    }

    public function logout()
    {
       Auth::logout();
       return redirect('/');
    }




}
