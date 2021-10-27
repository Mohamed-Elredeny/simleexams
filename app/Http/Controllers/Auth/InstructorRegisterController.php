<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstructorRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:instructor');
    }

    public function showRegisterForm()
    {
        return view('auth.instructor-register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:instructors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Instructor::create($request->all());

        return redirect()->route('instructor.dashboard');
    }
}