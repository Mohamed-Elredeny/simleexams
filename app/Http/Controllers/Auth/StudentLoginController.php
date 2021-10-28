<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.student-login');
    }

    public function login(Request $request)
    {
        if(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->route('student.dashboard');
        }

        // if unsuccessful
        return redirect()->back()->with('error', 'البريد الالكتروني او كلمة المرور غير صحيحة');
    }
}
