<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:student');
    }

    public function showRegisterForm()
    {
        return view('Site.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $request['name'] = $request['fname'] . ' ' . $request['lname'];
        $fileName = $request->imagee->getClientOriginalName();
        $file_to_store = time() . '_' . $fileName ;
        $request->imagee->move(public_path('assets/images/users'), $file_to_store);

        $request['password'] = Hash::make($request->password);
        $request['image'] = $file_to_store;
        Student::create($request->all());

        return redirect()->route('student.dashboard');
    }
}
