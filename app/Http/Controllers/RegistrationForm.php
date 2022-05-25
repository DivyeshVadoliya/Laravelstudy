<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationForm extends Controller
{
    //
    function signin()
    {
    	return view('RegistrationForm.formlogin');
    }
    function signup(Request $request)
    {
    	//dd($request);
    	//print_r($request->input('name')); //printonly name key valyu 
    	//print_r($request-> all());		//print all data from request array
    	//print_r($request->name);
    	//$request->flash();//setion request all data
    	/*$request->flashOnly(['name','email']);//setion request only name and email value get 
    	print_r($request->old('name'));
    	print_r($request->old('email'));
    	print_r($request->old('password'));*/
    	$request->flashExcept('password');//without password all data passing
    	return view('RegistrationForm.formlogin');
    }
  }
