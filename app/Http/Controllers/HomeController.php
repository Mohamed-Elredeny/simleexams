<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function checkAuthLogin(Request $request)
    {
        if($request->type == 'admin')
        {
            return redirect()->route('admin.login',['password'=> $request->password, 'email'=>$request->email]);
        }
        elseif($request->type == 'instructor')
        {
            return redirect()->route('instructor.login',['password'=> $request->password, 'email'=>$request->email]);
        }
        elseif($request->type == 'student')
        {
            // return 'vendor';
            return redirect()->route('student.login',['password'=> $request->password, 'email'=>$request->email]);
        }
        return 'sad';
    }
}
