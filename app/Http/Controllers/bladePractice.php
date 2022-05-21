<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladePractice extends Controller
{
    //
    function show()
    {
    	return view('bladeview.bladepage');
    }
    function show1()
    {
    	//$name='Divyesh';
    	//$name='Milan';
    	//$name='Divyesh1234';
    	$name=['1','2','3','4'];
    	  //$name=[];
    	return view('bladeview.bladepage',['name1'=>$name]);
    	//return view('bladeview.bladepage');
    }
}
