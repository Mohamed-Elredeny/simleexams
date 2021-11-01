<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hint;
use App\Models\Media;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $admins = Question::where('lesson',$id)->get();
        return view('admin.questions.index',compact('id','admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.questions.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //questions
        $answers = $this->getQuestions($request);
        //Right answer {Index}
        $right_answer =$request->answers;
        //question bank
        if($request->question_bank){
            $question_bank =  1;
        }else{
            $question_bank= 0;
        }
        //Number & Body
        $number = $request->number;
        $body = $request->body;
        //Hints
        if($request->is_there_hints){
            $is_there_hints =  1;
        }else{
            $is_there_hints= 0;
        }
        if($is_there_hints == 1){
            if(!$request->hint_details){
               $hint_details = '';
            }else{
                $hint_details = $request->hint_details;
            }
            if($request->hint_media_id){
                $hint_media_id = $this->hint_media_id($request,'image','hints');
            }else{
                $hint_media_id = null;
            }
            $hint = Hint::create([
                'description'=>$hint_details,
                'media_id'=> $hint_media_id
            ]);
            $hint = $hint->id;
        }else{
            $hint= null;
        }
        //return $hint;
        //Media
        if($request->media_id){
            $media_id = $this->media($request,'image','questions');
        }else{
            $media_id = null;
        }
        Question::create([
            'body'=>$body,
		    'number'=>$number,
		    'media_id'=>$media_id,
		    'answers'=>$answers,
		    'right_answer'=>$right_answer,
		    'question_bank'=>$question_bank,
		    'hint_id'=>$hint,
            'lesson'=>$request->lesson
        ]);
        return redirect()->back();
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
    public function hint_media_id(Request $request,$type,$table){
        $fileName = $request->hint_media_id->getClientOriginalName();
        $file_to_store = time() . '_' . $fileName ;
        $request->hint_media_id->move(public_path('assets/images/'.$table.'/'), $file_to_store);
        $media = Media::create([
            'type'=>$type,
            'table_name'=>$table,
            'file'=>$file_to_store
        ]);
        return $media->id;
    }

    public function getQuestions(Request $request){
        $questions =[];
        for($i = 0;$i<4;$i++){
            $questions [] = $request['questions'.$i];
        }
        $questions =implode('|', $questions);
        return $questions;
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
    public function deleteImage($id,$model_type,$model_id){
        Media::destroy($id);
        if($model_type == 'hint'){
            $model_type = Hint::find($model_id);
        }elseif($model_type == 'question'){
            $model_type = Question::find($model_id);
        }
        $model_type->update(['media_id'=>null]);
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        return view('admin.questions.edit',compact('id','question'));
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
        $one_question = Question::find($id);
        //questions
        $answers = $this->getQuestions($request);
        //Right answer {Index}
        $right_answer =$request->answers;
        //question bank
        if($request->question_bank){
            $question_bank =  1;
        }else{
            $question_bank= 0;
        }
        //Number & Body
        $number = $request->number;
        $body = $request->body;
        //Hints
        if($request->is_there_hints){
            $is_there_hints =  1;
        }else{
            $is_there_hints= 0;
        }
        if($is_there_hints == 1){
            if(!$request->hint_details){
                if(isset($one_question->hint->details)) {
                    $hint_details = $one_question->hint->details;
                }else{
                    $hint_details = null;
                }
            }else{
                $hint_details = $request->hint_details;
            }
            if($request->hint_media_id){
                $hint_media_id = $this->hint_media_id($request,'image','hints');
            }else{
                if(isset($one_question->hint->media_id)){
                    $hint_media_id = $one_question->hint->media_id;
                }else{
                    $hint_media_id  =null;
                }
            }
            if($one_question->hint_id != null){
                $hint = Hint::find($one_question->hint_id);
                $hint->update([
                    'description'=>$hint_details,
                    'media_id'=> $hint_media_id
                ]);
            }else{
                $hint = Hint::create([
                    'description'=>$hint_details,
                    'media_id'=> $hint_media_id
                ]);
            }
            $hint = $hint->id;
        }else{
            $hint= null;
        }
        //return $hint;
        //Media
        if($request->media_id){
            $media_id = $this->media($request,'image','questions');
        }else{
            $media_id =  $one_question->media_id;
        }
        $one_question->update([
            'body'=>$body,
            'number'=>$number,
            'media_id'=>$media_id,
            'answers'=>$answers,
            'right_answer'=>$right_answer,
            'question_bank'=>$question_bank,
            'hint_id'=>$hint,
            'lesson'=>$request->lesson
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect()->back();
    }
}
