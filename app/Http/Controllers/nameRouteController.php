<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nameRouteController extends Controller
{
    //
    function home()
    {
    	return view('NameRouteView.nameHome');
    }
    function dashbord()
    {
    	return view('NameRouteView.nameDeshbord');
    }
    function admin()
    {
    	return view('NameRouteView.nameAdmin');
    }
    function about()
    {
    	return view('NameRouteView.nameAbout');
    }

}
