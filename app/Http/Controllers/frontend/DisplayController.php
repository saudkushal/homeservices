<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(Request $request){
        $services=Services::query();
        if ($request->search) {
            $services->where('servicename', 'like', "%$request->search%");
        }
        $services=$services->get();
        return view("frontend.file.display",compact("services"));
    }

   

}
