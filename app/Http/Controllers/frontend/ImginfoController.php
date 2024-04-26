<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ImginfoController extends Controller
{
    public function index($id)
    {
        $services= Services::find($id);
        return view("frontend.file.imageinfo",compact('services'));
    }
}
