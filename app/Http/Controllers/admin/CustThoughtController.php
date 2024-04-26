<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\CustomerThought;
use Illuminate\Http\Request;

class CustThoughtController extends Controller
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
        $thought = Contact::query();

        if ($request->sortAlpa) {
            $thought->orderBy('customerthought', 'asc');
        }

        if ($request->date) {
            $thought->whereDate('customerthought', '=', 'created_at');
        }

        if ($request->lifs) {
            $thought->orderBy('created_at', 'desc');
        }

        if ($request->search) {
            $thought->where('customerthought', 'like', "%$request->search%");
        }


        $thought = $thought->get();

        $count = Contact::count();

        return view("admin.homeservices.thoughttable", compact("thought", "count"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create([
            'customerthought' => $request->customerthought,
        ]);
        // return redirect()->route('custthought.index')->with('success');
        return back()->with('success');

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
        //
    }

}
