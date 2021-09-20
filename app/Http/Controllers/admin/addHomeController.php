<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\homepage;
use Illuminate\Http\Request;

class addHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'website_name' => 'required',
            'logo1' => 'required',
            'abt_heading' => 'required',
            'abt_content' => 'required',
        ]);
         $filename = addMedia($request->file('logo1'),'logo');
         $request->merge(['logo' => 'storage/' .$filename]);
        
         $data = $request->all();
          homepage::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(homepage $homepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homepage $homepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(homepage $homepage)
    {
        //
    }

   
}
