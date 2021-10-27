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
        elseif($request->type == 'supporter')
        {
            return redirect()->route('supporter.login',['password'=> $request->password, 'email'=>$request->email]);
        }
        elseif($request->type == 'vendor')
        {
            // return 'vendor';
            return redirect()->route('vendor.login',['password'=> $request->password, 'email'=>$request->email]);
        }
        return 'sad';
    }
}
