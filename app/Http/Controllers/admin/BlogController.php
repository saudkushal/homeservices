<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogValidationRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $blog = Blog::get();
        return view("admin.homeservices.blogstorage", compact("blog"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.homeservices.blogcreation");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogValidationRequest $request)
    {
        Blog::create([
            "blogdate" => $request->blogdate,
            "blogname" => $request->blogname,
            "content" => $request->content,

        ]);
        return redirect()->route("blog.index")->with("success");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $blog= Blog::find($id);
       $blog->delete();
       return back();
    }
}
