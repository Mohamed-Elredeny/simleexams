<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\ExamQuestion;

use Illuminate\Http\Request;

class ExamQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $current_exam = Exam::find($id);
        $subject = $current_exam->subject;
        $sections = $subject->sections;
        $exams = ExamQuestion::where('exam_id',$id)->get();
        return view('admin.exams.questions.index', compact('exams','sections','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //examQuestions
        $examQuestions =  $request->examQuestions;//Done

        //examQuestions{{section_Id}}
        $current_exam = Exam::find($request->exam_id);
        $subject = $current_exam->subject;
        $sections = $subject->sections;

        $examQuestions =[];
        foreach($sections as $sec){
            if($request['examQuestions'.$sec->id]){
                $examQuestions []=[$sec->id=>1];
            }else{
                $examQuestions []= [$sec->id=>0];
            }
        }
        return $examQuestions ;
        //exam{{question}}

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
