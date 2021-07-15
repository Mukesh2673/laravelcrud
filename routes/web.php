<?php

use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\EmployeeController;
 use App\Http\Controllers\UserAuth;
 use App\Http\Controllers\registrationController;
 use App\Http\Controllers\registeredController;
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
    return view('htech');
}); 

Route::get('/pages', function () {
    return view('pages.test');
}); 

Route::get('/list' ,[MemberController::class,'show']); 

Route::get('/join' ,[EmployeeController::class,'show']); 
Route::post('/user',[UserAuth::class,'userLogin']);
//Route::view("login",'login');
Route::view("index",'index');
Route::view("/registration",'registration');


 Route::get('/login', function(){
    if(session()->has('user'))
    {
        /* 
            $name=DB::table('developer')
            ->where('salary', 20000)
            ->get(); */
      
        
    }

    return view('login');

}); 

 
 




Route::get('/logout', function (){
    if(session()->has('user'))
    {
session()->pull('user');

    }
    return redirect('login');

}); 

Route::POST('/registered',[registrationController::class,'saveDatauser']);
Route::get('/view_list',[registeredController::class,'showuser']);
Route::get('edit/{id}',[registeredController::class,'edit']);
Route::POST('edit',[registeredController::class,'update']);
Route::get('delete/{id}',[registeredController::class,'delete']);
