<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Lesson;
use App\Models\Media;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::get();
        return view('admin.exams.index',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Subject::get();
        return view('admin.exams.create',compact('groups'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        Exam::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'type'=>'exam',
            'price'=>$request->price,
            'media_id'=> $this->media($request,'image','exams'),
            'subject_id'=>$request->subject_id
        ]);
        $exams = Exam::get();
        return view('admin.exams.index',compact('exams'));
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
        $exam = Exam::find($id);
        return view('admin.exams.edit',compact('exam'));
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
        $subject = Exam::find($id);
        if($request->media_id){
            $media_id = $this->media($request,'image','exams');
        }else{
            $media_id = $subject->media_id;
        }
        $subject->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'price'=>$request->price,
            'media_id'=> $media_id
        ]);
        return redirect()->back()->with('success','Done Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exam::destroy($id);
        return redirect()->back()->with('message','Done Successfully');
    }
}
