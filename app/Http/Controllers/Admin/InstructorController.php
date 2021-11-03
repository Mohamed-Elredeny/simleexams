<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;

class InstructorController extends Controller
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
        $admins = Instructor::get();
        return view('admin.instructors.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Subject::get();
        return view('admin.instructors.create', compact('groups'));
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
        $categories = Subject::get();
        $cards =  $request->cards_id;
        $ids =[];
        if(in_array('all',$cards)){
            foreach($categories as $cat){
                $ids [] = $cat->id;
            }
            $res = implode('|',$ids);
        }else{
            $res = implode('|',$cards);
        }

        Instructor::create([
            'name'=>$request->name,
            'degree'=>$request->degree,
            'password'=>$request->password,
            'email'=>$request->email, 
            'media_id'=> $this->media($request,'image','instructors'),
            'subjects' => $res,
        ]);

        return redirect()->back()->with('success','Done Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Instructor::find($id);
        return view('admin.instructors.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Instructor::find($id);

        $my_groups =  explode('|', $subject->subjects);

        $avilable_groups = [];
        $my_great_groups = [];

        foreach($my_groups as $group ) {
            $my_great_groups [] = Subject::find($group);
        }

        $all_groups = Subject::get();
        foreach($all_groups as $group ){
            if(!in_array($group->id, $my_groups)){
                $avilable_groups [] = $group;
            }
        }

        return view('admin.instructors.edit',compact('subject','avilable_groups','my_great_groups'));
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
        $subject = Instructor::find($id);
        if($request->media_id){
           $media_id = $this->media($request,'image','instructors');
        }else{
            $media_id = $subject->media_id;
        }
        $categories = Subject::get();
        $cards =  $request->cards_id;
        $ids =[];
        if(in_array('all',$cards)){
            foreach($categories as $cat){
                $ids [] = $cat->id;
            }
            $res = implode('|',$ids);
        }else{
            $res = implode('|',$cards);
        }

        $subject->update([
            'name'=>$request->name,
            'degree'=>$request->degree,
            'password'=>$request->password,
            'email'=>$request->email, 
            'media_id'=> $media_id,
            'subjects' => $res,
        ]);
        return redirect()->back()->with('success','Done Successfully');
    }

    public function deleteSubject($vendor,$category){
        $current_vendor = Instructor::find($vendor);
        $string = $current_vendor->subjects;
        $array = explode('|',$string);
        $new_array = [];
        foreach($array as $arr){
            if($category != $arr){
                $new_array [] = $arr;
            }
        }
         $new_array = implode('|',$new_array);
        $current_vendor->update(['subjects'=>$new_array]);
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
        Instructor::destroy($id);
        return redirect()->back()->with('message','Done Successfully');
    }
}
