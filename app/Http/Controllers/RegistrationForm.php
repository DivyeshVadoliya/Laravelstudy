<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;
use App\Http\Requests\ErrorRequest;
class RegistrationForm extends Controller
{
    //
    function signin()
    {
    	return view('RegistrationForm.formlogin');
    }
   // function signup(Request $request)
    function signup(ErrorRequest $request)
    {
    	//dd($request);
    	//print_r($request->input('name')); //printonly name key valyu 
    	//print_r($request-> all());		//print all data from request array
    	//print_r($request->name);
        // $input=$request->flash();//setion request all data
         //dd($input);
    	/*$request->flashOnly(['name','email']);//setion request only name and email value get 
    	print_r($request->old('name'));
    	print_r($request->old('email'));
    	print_r($request->old('password'));*/
    	//$request->flashExcept('password');//without password all data passing

///////////////////////////////////////////////////////////
//////////////// validated//////////////////////////////////
   /* 	$validated=$request->validate([
    		//'name'=>['required',new Uppercase],//Usercase is make a rules
    		'name'=>['required',new Uppercase,
    					function($attribute ,$value , $fail){ //this is special value check it pass it fail massage
    						if ($value === 'DIVYESH') { 
    							$fail('This '.$attribute.' is invalid');
    						}
    					}
    				],
    		'email'=>'required|min:15',
    		'password'=>'required',
    	]);
    	//dd($validated);  */
//////////////////////////////////////////////////////////
    	$request->validated();
    	$input=$request->except('_token');
    	return view('RegistrationForm.formlogin',['data'=>$input]);
    }
  }
