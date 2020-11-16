<?php

use App\Http\Controllers\mycontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/app', function () {
   
    return view('app');
    
});


Route::get('/about', function () {

    $job=array('p1'=>'c++','p2'=>'java','p3'=>'php');
    return view('about')->with('job',$job);
});




  

