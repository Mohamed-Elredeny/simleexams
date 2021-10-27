<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:instructor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.instructor-login');
    }

    public function login(Request $request)
    {
        if(Auth::guard('insrtuctor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->route('instructor.dashboard');
        }

        // if unsuccessful
        return redirect()->back()->with('error', 'البريد الالكتروني او كلمة المرور غير صحيحة');
    }
}
