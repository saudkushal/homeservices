<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogcontentController extends Controller
{
    public function index($id)
    {
        $blog= Blog::find($id);
        return view("frontend.file.blogcontent",compact('blog'));
    }
}
