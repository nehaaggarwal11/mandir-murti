<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\media;
use Illuminate\Http\Request;

class mediaController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(media $media)
    {
        //
    }
}
