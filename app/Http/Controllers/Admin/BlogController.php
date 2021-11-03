<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
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
        $rules = [
            'title' => 'required',
            'writer' => 'required',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        } else {
            $title_ar = $request->title;
            $title_en = $request->title;
            $description_ar = $request->description;
            $description_en = $request->description;

            if($request->image){
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('assets/images/blogs/'), $imageName);
            }else{
                $imageName = 'default';
            }

            Blog::create([
                'title_ar'=> $title_ar,
                'title_en'=> $title_en,
                'writer'=> $request->writer,
                'description_ar'=> htmlspecialchars($description_ar),
                'description_en'=> htmlspecialchars($description_en),
                'image'=> $imageName,
            ]);
            return redirect()->route('blogs.index')->with('success', 'The Blog has created successfully.');
        }
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
        $rules = [
            'title' => 'required',
            'writer' => 'required',
            'description' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $title_ar = $request->title;
            $title_en = $request->title;
            $description_ar = $request->description;
            $description_en = $request->description;

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
                'writer'=> $request->writer,
                'description_ar'=> htmlspecialchars($description_ar),
                'description_en'=> htmlspecialchars($description_en),
                'image'=> $imageName,
            ]);

        }
        return redirect()->route('blogs.index')->with('success', 'The Blog has updated successfully.');
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
        return redirect()->route('blogs.index')->with('success', 'Deleted successfully');
    }
}
