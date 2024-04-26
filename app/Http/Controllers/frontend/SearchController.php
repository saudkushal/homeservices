<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class SearchController extends Controller
{
    public function index(Request $request){


$query=$request->input('servicename');


$searchservice=Services::where('servicename', 'like', "%$query%")->get();


        return view("frontend.file.searchfile",compact("searchservice"));
    }
}
