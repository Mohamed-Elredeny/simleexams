<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Instructor;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = Subject::get();
        $instructors = Instructor::get();
        $blogs = Blog::get();
        return view('Site.index', compact('subjects', 'instructors', 'blogs'));
    }
    public function contact(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $msubject = $request->msubject;
        $message = $request->message;

        Mail::to('smlesecretexam@gmail.com')->send(new \App\Mail\Contact($fname,$lname,$email,$msubject,$message));

        return redirect()->back()->with('message','Done Successfully');
    }
}
