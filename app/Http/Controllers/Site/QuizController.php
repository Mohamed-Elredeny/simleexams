<?php

namespace App\Http\Controllers\Site;

use App\Models\Exam;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    public function index($id)
    {
        $exam = Exam::find($id);
        $subjectslimits = Subject::inRandomOrder()->limit(5)->get();
        $allSubjects = Subject::get();
        return view('Site.quiz', compact('exam', 'subjectslimits', 'allSubjects'));
    }

    public function examStore($id, Request $request)
    {
        $exam = Exam::find($id);
        for ($i=0; $i < count($exam->questions); $i++) { 
            
        }
        return $request;
    }
}
