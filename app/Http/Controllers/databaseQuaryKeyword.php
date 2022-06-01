<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseQuaryKeyword extends Controller
{
    //
    function databasekeyword()
    {
    	//get all data from studentform table//////////////////

    	// $data1=DB::table('studentform')->get();
    	// dd($data1);

    	//to retrieve a single row form database/////////////
		//$data1=DB::table('studentform')->where('name','like','A%')->first();
    	//dd($data1);

    	//to retrieve value like same as kayword a single row form database /////////////
		//$data1=DB::table('studentform')->where('name','like','R%')->get();
    	//dd($data1);

    	//to retrieve value id find single row form database /////////////
		//$data1=DB::table('studentform')->find(3);
    	//dd($data1);

    	//to retrieve a single coloum value form database /////////////
		//$data1=DB::table('studentform')->pluck('name');
    	//dd($data1);

    	//to retrieve a two coloum name keyword thire marks is value form database /////////////
		//$data1=DB::table('studentform')->pluck('marks','name');
    	//dd($data1);

    	//When retrieve thousend of data form database at that time chunk is at a time multiple data pass /////////////
		/*DB::table('studentform')->orderBy('id')->chunk(2,function($data){
			print_r('<br> This data chunk <br>');
			foreach ($data as $value) {
				# code...
				print_r($value);
				print_r('<br>');
				
			}
		});*/


		//Aggregates Value like as max,min,avg,sum get from database
		//$data1=DB::table('studentform')->count();//count row (id )from database
		//$data1=DB::table('studentform')->max('marks');//max value get from database
		//$data1=DB::table('studentform')->min('marks');//min value get from database
		//$data1=DB::table('studentform')->avg('marks');// total marks avg value from database
    	//dd($data1);

    	////////////////exists if any data is exists then true condition 
    	/*//if(DB::table('studentform')->where('id','5')->exists())//database 5 id aveliable that this inisilight this condition;
    	if(DB::table('studentform')->where('name','Atharvaaaa')->exists())//now here athava name aveliable but this name is not aveliable in database that time not true its condition
    	{
    		dd('Yes');
    	}
    	if(DB::table('studentform')->where('name','Atharvaaaa')->doesntExist())//now here athava name aveliable but this name is not aveliable in database that time true its condition
    	{
    		dd('Yes');
    	}*/

    	///select method select selected coloum from databased
    	//$data=DB::table('studentform')->select('name','email','city')->get();
    	//dd($data);
		//$data=DB::table('studentform')->select('name','email','city');
		//	$data1=$data->addselect('marks')->get();//extra add new coloum with addselect method
    	//dd($data1);

    	///force to retrive value from database
    	//	$data=DB::table('studentform')->distinct()->get();
    	//	dd($data);


    	//Where method
    	//$data=DB::table('studentform')->where('id','>','3')->get();//get value geterther 3
    	//dd($data);
    	//$data=DB::table('studentform')->whereBetween('id',[2,5])->get();//get value between 2and 5
    	//dd($data);
    	//$data=DB::table('studentform')->whereDate('birthdate','1992-12-12')->get();//get value this birthdate
    	//dd($data);
    	//$data=DB::table('studentform')->whereMonth('birthdate','12')->get();//get value this month same as do whereYear
    	//dd($data);


    	//Order Method this method by defolt increas value get
    	//$data=DB::table('studentform')->orderBy('marks')->get();
    	// $data=DB::table('studentform')->orderBy('marks','desc')->get();
    	// dd($data);

    	//latest oldest random  method
    	//$data=DB::table('studentform')->latest('birthdate')->get();
    	//$data=DB::table('studentform')->oldest('birthdate')->get();//oldest
    	//$data=DB::table('studentform')->inRandomOrder()->get();//random order value get
    	//dd($data);


    	//databased insert method
    	DB::table('studentform')->insert([
    		['name'=>'Divyesh',
    		  'email'=>'divyesh@gmail.com',
    		  'city'=>'Jamnagar',
    		  'marks'=>'86',
    		  'birthdate'=>'1998-10-12'],
    		 ['name'=>'Sanjay',
    		 	'email'=>'sanjay@gmail.com',
    		 	'city'=>'morbi',
    		 	'marks'=>'71',
    		 	'birthdate'=>'2020-09-23'],
    								]);


    	return view('databaseQuaryKeyword.databasekeyword');
    }
}
