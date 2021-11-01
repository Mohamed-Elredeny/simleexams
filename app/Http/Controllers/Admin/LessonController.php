<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Lesson as LessonAlias;
use App\Models\Media;
use App\Models\Subject;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $subject = Subject::find($id);
        $admins  = Lesson::where('section_id',$id)->get();
        return view('admin.lessons.index',compact('subject','id','admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.lessons.create',compact('id'));
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
        Lesson::create([
            'title_ar'=>$request->title_ar,
            'title_en'=>$request->title_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'media_id'=> $this->media($request,'image','lessons'),
            'section_id'=>$request->section_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
