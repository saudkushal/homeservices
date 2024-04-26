<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

     public function index(Request $request)
    {
        $services = Services::query();

        if ($request->search) {
            $services->where('servicename', 'like', "%$request->search%");
        }
        $services=$services->get();

        return view("admin.homeservices.services", compact("services"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view("admin.homeservices.create");

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $image = $this->fileUpload($request, 'serviceimage');
        Services::create([
            "servicename" => $request->servicename,
            "serviceimage" => $image,
            "description" => $request->description,
        ]);
        return redirect()->route('services.index')->with('success');
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $resource = Services::find($id);

        return view("admin.homeservices.view", compact("resource"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $resource = Services::findOrFail($id);
        return view("admin.homeservices.edit", compact("resource"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resource = Services::findOrFail($id);
        $resource->update([
            'servicename' => $request->servicename,
            'serviceimage' => $request->serviceimage,
            'description' => $request->description,
        ]);
        return redirect()->route('services.index')->with('success');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $resource = Services::find($id);
        $resource->delete();
        return back();
    }
}
