<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPracticePage extends Controller
{
    //this methad pass in simple string ;
    function methad1(){
    	return "hello this is simple methad1";
    }
    //this methad call to view page;
    function methad2(){
    	return view('controllerstudyview.controViewPage1');
    }
    //this methad pass the perameter;
    function methad3($data1){
    	return view('controllerstudyview.controViewPage2',['data2'=>$data1]);
    }
    //data Pass from Controller to view 
    function methad4(){
    	$data='Divyesh1234';
    	return view('controllerstudyview.controViewPage4',['data1'=>$data]);
    }
}
