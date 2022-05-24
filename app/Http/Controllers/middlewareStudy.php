<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class middlewareStudy extends Controller
{
    //
    function home()
    {
    	return view('middlewareStudyView.home');
    }
    function deshbord()
    {
    	return view('middlewareStudyView.deshbord');
    }
    function about()
    {
    	return view('middlewareStudyView.about');
    }
    function help()
    {
    	return view('middlewareStudyView.help');
    }
}
