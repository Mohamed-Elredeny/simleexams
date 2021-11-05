<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
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
        $ignore_ids_cuz_there_are_in_exam= [];
        foreach($exams as $ex ){
            $ignore_ids_cuz_there_are_in_exam [] = $ex->question_id;
        }
        return view('admin.exams.questions.index', compact('exams','sections','id','ignore_ids_cuz_there_are_in_exam'));
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
        if($examQuestions){
            $edit_all =  1;
        }else{
            $edit_all =  0;
        }

        if($edit_all == 1){
            $questions_exist = ExamQuestion::where('exam_id',$request->id)->get();
            if(count($questions_exist) > 0) {
                foreach($questions_exist as $qexist) {
                    ExamQuestion::destroy($qexist->id);
                }
            }
        }

        //examQuestions{{section_Id}}
        $current_exam = Exam::find($request->exam_id);
        $subject = $current_exam->subject;
        $sections = $subject->sections;
        $examQuestionsSector =[];
        foreach($sections as $sec){
            if($request['examQuestions'.$sec->id]){
                //Sec Active
                $questions_section = Question::where('section',$sec->id)->get();
                foreach($questions_section as $qsection){
                    $questions_exist = ExamQuestion::where('question_id',$qsection->id)->where('exam_id',$request->id)->get();
                    if(count($questions_exist) == 0) {
                        ExamQuestion::create([
                            'exam_id' => $request->exam_id,
                            'question_id' => $qsection->id
                        ]);
                    }
                }
            }
        }

        //Questionssssssssssssssss
        if(isset($request->exam_add)) {
            if (count($request->exam_add) > 0) {
                foreach($request->exam_add as $question){
                    ExamQuestion::create([
                        'exam_id' => $request->exam_id,
                        'question_id' => $question
                    ]);
                }
            }
        }

        if(isset($request->exam_remove)) {
            if (count($request->exam_remove) > 0) {
                foreach($request->exam_remove as $question){
                    ExamQuestion::destroy($question);
                }
            }
        }


        if(isset($request->exam_view)) {
             $exam_questions_all = ExamQuestion::where('exam_id',$request->exam_id)->get();
             foreach($exam_questions_all as $exam_all){
                $exam_all->delete();
             }
        }

        return  redirect()->back()->with('message','sad');
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
