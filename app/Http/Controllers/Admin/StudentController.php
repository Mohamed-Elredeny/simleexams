<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Student::get();
        return view('admin.students.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
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
        Student::create([
            'name'=>$request->name,
            'password'=>$request->password,
            'email'=>$request->email, 
            'phone' => $request->phone,
            'media_id'=> $this->media($request,'image','students'),
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
        $subject = Student::find($id);
        return view('admin.students.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Student::find($id); 

        return view('admin.students.edit',compact('subject'));
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
        $subject = Student::find($id);  

        if($request->media_id){
            $media_id = $this->media($request,'image','students');
         }else{
             $media_id = $subject->media_id;
         }

        $subject->update([
            'name'=>$request->name,
            'password'=>$request->password,
            'email'=>$request->email, 
            'phone' => $request->phone,
            'media_id'=> $media_id,
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
        Student::destroy($id);
        return redirect()->back()->with('message','Done Successfully');
    }
}
