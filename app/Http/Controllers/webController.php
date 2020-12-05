<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
class webController extends Controller
{
    

    public function index(){

        $slider=slider::all();
        return view('web.index',compact('slider'));
    }
}
