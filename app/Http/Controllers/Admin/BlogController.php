<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $title_ar = $request->title_ar;
        $title_en = $request->title_en;
        $description_ar = $request->description_ar;
        $description_en = $request->description_en;

        if($request->image){
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/images/blogs/'), $imageName);
        }else{
            $imageName = 'default';
        }

        Blog::create([
            'title_ar'=> $title_ar,
            'title_en'=> $title_en,
            'buplisher'=> $request->writer,
            'description_ar'=> htmlspecialchars($description_ar),
            'description_en'=> htmlspecialchars($description_en),
            'image'=> $imageName,
        ]);
        return redirect()->route('admin.blogs.index')->with('success', 'تم الاضافة بنجاح');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));
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

        $currentBlog = Blog::find($id); 

        $title_ar = $request->title_ar;
        $title_en = $request->title_en;
        $description_ar = $request->description_ar;
        $description_en = $request->description_en;

        if ($request->image) {
            unlink(public_path('assets/images/blogs') .'/' . $currentBlog->image);
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/assets/images/blogs/'), $imageName);
        }
        else{
            $imageName = $currentBlog->image;
        }
        $currentBlog->update([
            'title_ar'=> $title_ar,
            'title_en'=> $title_en,
            'buplisher'=> $request->writer,
            'description_ar'=> htmlspecialchars($description_ar),
            'description_en'=> htmlspecialchars($description_en),
            'image'=> $imageName,
        ]);
        
        return redirect()->route('admin.blogs.index')->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = Blog::find($id);
        $old->delete();
        return redirect()->route('blogs.index')->with('success', 'تم الحذف بنجاح');
    }
}
