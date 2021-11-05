<?php

namespace App\Http\Controllers\Auth;

use App\Models\Media;
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
    public function media(Request $request,$type,$table){
        $fileName = $request->media_id->getClientOriginalName();
        $file_to_store = time() . '_' . $fileName ;
        $request->media_id->move(public_path('assets/images/'.$table.'/'), $file_to_store);
        $media = Media::create([
            'type'=>$type,
            'table_name'=>$table,
            'file'=>$file_to_store
        ]);
        return $media->id;
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8'],
            'media_id'=>['required']
        ]);

        $name = $request['fname'] . ' ' . $request['lname'];


        $password = Hash::make($request->password);
        Student::create([
            'name'=>$name,
		    'email'=>$request->email,
		    'phone'=>$request->phone,
	        'password'=>$password,
	    	'media_id'=> $this->media($request,'image','users')
        ]);

        return redirect()->route('login');
    }
}
