<?php

namespace App\Http\Controllers\Site;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Instructor;

class SubjectController extends Controller
{
    public function index($id)
    {
        $subject = Subject::find($id);  
        $instructors = Instructor::where('subjects','like',"%$id|%")->orwhere('subjects','like',"%|$id%")->orwhere('subjects', $id)->get();
        $subjectslimits = Subject::inRandomOrder()->limit(5)->get();
        $allSubjects = Subject::get();
        return view('Site.subject', compact('subject','instructors', 'subjectslimits', 'allSubjects'));
    }

    public function allSubjects()
    {
        $subjects = Subject::get();
        return view('Site.allSubjects', compact('subjects'));
    }

    public function allInstructors()
    {
        $instructors = Instructor::get();
        return view('Site.instructors', compact('instructors'));
    }

    public function allBlogs()
    {
        $blogs = Blog::get();
        return view('Site.blog', compact('blogs'));
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::inRandomOrder()->limit(5)->get();
        return view('Site.blogDetails', compact('blog', 'blogs'));
    }
}
