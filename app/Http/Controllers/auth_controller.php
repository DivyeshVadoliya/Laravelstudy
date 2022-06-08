<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class auth_controller extends Controller
{
    //
    public function auth_login_check(Request $request1){
    	//return Auth::user();//check login full details
    	//return Auth::user()->name;//only name keyword value display
    	//return Auth::user()->email;
    	if(Auth::user()){
	    	return $request1->user()->name;
	    }
	    else{
    	 // return Auth::user();
	    //	print_r("plz login 1st");
	    	return redirect()->route('homepage');
	    }
    }
}
