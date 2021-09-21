<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\slider_list;
use App\Models\gallery_list;
use App\Models\category_list;


class homeController extends Controller
{
    public function index()
    {

        $sliders=gallery_list::all();
        $slider_main=slider_list::orderBy('position')->get();
        $category=category_list::all();

        return view('frontend.index',['sliders'=>$sliders,'slider_main'=>$slider_main,'category'=>$category]);


        return view('frontend.index');

    }
}
