<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewValidationRequest;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){

        $reviews = Reviews::latest()->get();
        // $reviews = Reviews::orderBy("id","desc")->get();
        return view("frontend.file.reviews",compact('reviews'));
    }
    public function store(ReviewValidationRequest $request)
    {
        $image = $this->fileUpload($request,'photo');
         Reviews::create([
            'customername' => $request->customername,
            'review' => $request->review,
            'rating' => $request->rating,
            'photo' => $image,

        ]);
        return redirect()->route('reviews')->with('success');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/uploads/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
        }
        return $imageName;
    }
    public function create()
    {
        return view("frontend.file.reviewcreation");

    }

}
