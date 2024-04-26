<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlinkRequest;
use App\Models\Slink;
use Illuminate\Http\Request;

class SlinkController extends Controller
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
        $slink = Slink::get();
      return view("admin.homeservices.slinkstore", compact("slink"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.homeservices.slinkcreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SlinkRequest $request)
    {

        Slink::create([
            "logo" =>$request->logo,
            "heading" =>  $request->heading,
            "description" => $request->description,
        ]);
        return redirect()->route('slink.index')->with('success');
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
        $slink= Slink::find($id);
        $slink->delete();
        return back();
    }
}
