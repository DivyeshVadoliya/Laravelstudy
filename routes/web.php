<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPracticePage;//path of new create Controller
use App\Http\Controllers\singleMethadController;//invokable controller (single mathod controller)
use App\Http\Controllers\bladePractice;
use App\Http\Controllers\IncludeController;
use App\Http\Controllers\middlewareStudy;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

////////////////////   View  /////////////////////////
/*
Route::get('userurl', function () {
    return view('studyview.user');//studeyview folder in that user file run
});
Route::get('admin',function(){
	return view('studyview.admindata',['name'=>'Divyesh','id'=>'042']); 
});
Route::get('login/{id}',function($fun_id){
	return view('studyview.login',['view_id'=>$fun_id]);
});
Route::get('data/{id}/{name}/{data}',function($fun_id, $fun_name, $fun_data){
	return view('studyview.data',['view_id'=>$fun_id, 'view_name'=>$fun_name, 'view_data'=>$fun_data ]);
});
Route::get('myabc/{name}',function($fun_myname){
	return view('studyview.abcpage',['view_myname'=>$fun_myname]);
})->where('name','[A-Za-z]+');
Route::get('post/{name}/{id}',function($fun_postnm, $fun_postid){
	return view('studyview.postpage',['view_postnm'=>$fun_postnm, 'view_postid'=>$fun_postid]);
})->where('name','[A-Za-z]+')->where('id','[0-9]+');
	// other type also syntax ->whereAlpha('name')->whereNumber('id');
Route::get('urladmin/{name?}',function($fun_num='Null'){
	return view('studyview.blanckpage',['view_num'=>$fun_num]);
});
Route::view('student','studyview.student');
Route::view('model','studyview.model');
// Route::redirect('student','model');
// Route::redirect('student','model',301);
// Route::permanentRedirect('model','student');
/* Route::fallback(function(){
 	return view('studyview.defult');
 });*/

 ////////////////////////Controller////////////////////////////////////////
/*
Route::get('contropage1',[ControllerPracticePage::Class, 'methad1']);
Route::get('contropage2',[ControllerPracticePage::Class, 'methad2']);
Route::get('contropage3/{data}',[ControllerPracticePage::Class, 'methad3']);
Route::get('contropage4',singleMethadController::Class);
Route::get('contropage5',[ControllerPracticePage::Class, 'methad4']);
*/

///////////////////////////blade///////////////////////////////////////////

//Route::get('blade', [bladePractice::Class,'show']);
//Route::get('blade', [bladePractice::Class,'show1']);

/////////////////////////// Include /////////////////////////////////////

//Route::get('Include', [IncludeController::Class,'IncludePractics']);

/////////////////////////Component////////////////////////////////////
//Route::view('compPage','studyComponentPage');
//Route::view('anonymos','components.anonymosStudy');

//Route::view('slotPage','alert');

/////////////////////////Layout////////////////////////////////////
//Route::view('home','layoutview.layoutview');
//Route::view('contact','layoutview.contectview');

////////////////// Layout templet inheritance /////////////////////
//Route::view('home','templetLayout.homeTempletLayout');
//Route::view('contact','templetLayout.contactTempletLayout');

////////////////////Image uploaded///////////////////////////
//Route::view('image','imageview.imageview');

/////////////////////Middleware ///////////////////////////
 Route:: get('home',[middlewareStudy::class,'home']);
 Route:: get('deshbord',[middlewareStudy::class,'deshbord']);
 Route:: get('about',[middlewareStudy::class,'about'])->middleware('Contruction');
 Route:: get('help',[middlewareStudy::class,'help']);
