<?php

use App\Http\Controllers\FirtsControlller;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $url ='https://www.linkedin.com/in/victorcupa/';
    $video ="https://www.youtube.com/watch?v=3e1IsZJuYAw&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=1&ab_channel=CodersFree";

    return view('welcome',['links' =>$url,'videos' =>$video]);
});
ROUTE::get('/tests/',[FirtsControlller::class ,'index' ] );
ROUTE::get('/tests/',[FirtsControlller::class,'formulario']);

