<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facedes\DB;
use Illuminate\Support\Facades\DB;

class DatabaseStudentController extends Controller
{
    //
    function studentform(){
    	//$formdata=DB::select('select * from registrationform');
    	//dd($formdata);
        $data1= DB::select('select * from registrationform');
    	return view('databaseformview.studentForm',['data'=>$data1]);
    }
    function Displayform(Request $requestform){
            $validated=$requestform->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'phoneNumber'=>'required',
                'gender'=>'required',
                'language'=>'required',
                'address'=>'required',
                'pincode'=>'required',
            ]);

    	//dd($requestform);
    	$name=$requestform->input('name');
    	$email=$requestform->input('email');
    	$password=$requestform->input('password');
    	$phonenumber=$requestform->input('phoneNumber');
    	$gender=$requestform->input('gender');
    	$language=$requestform->input('language');
    	$address=$requestform->input('address');
    	$pincode=$requestform->input('pincode');

    	DB::insert('insert into registrationform (name ,email,password,phonenumber,gender,language,address,pincode) values (?,?,?,?,?,?,?,?)',[$name,$email,$password,$phonenumber,$gender,$language,$address,$pincode]);
        //null($registrationform);
    	//dd($name);
       $data1= DB::select('select * from registrationform');
      // dd($data1);
    	return view('databaseformview.studentForm',['data'=>$data1]);
    }
}
