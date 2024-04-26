<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Slink;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $slink = Slink::get();
        return view("frontend.file.services", compact('slink'));
    }

}
