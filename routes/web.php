<?php

use App\Http\Controllers\StudentContoller;
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

Route::get('/list',[StudentContoller::class,'list']);
Route::get('/add',[StudentContoller::class,'addview']);
Route::post('/add',[StudentContoller::class,'add']);
Route::get('/edit/{id}',[StudentContoller::class,'editview']);
Route::post('/edit/{id}',[StudentContoller::class,'edit']);
Route::get('/delete/{id}',[StudentContoller::class,'delete']);
