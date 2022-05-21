<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncludeController extends Controller
{
    //
    function IncludePractics()
    {
    	$data='Divyesh';
    	$data5= $data =='Divyesh1234'? true:false;
    	//$studentData=['11','12','13','14','15'];
    	$studentData=[];
    	return view('IncludeView.IncludeView1',['data1'=>$data5 , 'studentData1'=>$studentData]);
    }
}
