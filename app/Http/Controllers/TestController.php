<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function printer(){
    	return view('printer');
    }
    function scanner(){
    	return view('scanner');
    }
    function copy_view(){
    	return view('copy');
    }
}
