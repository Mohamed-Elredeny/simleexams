<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = Subject::get();
        $instructors = Instructor::get();
        return view('Site.index', compact('subjects', 'instructors'));
    }
}
