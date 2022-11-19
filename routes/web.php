<?php

use App\Http\Controllers\frontend\HomeController;
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

Route::get("getSession",function(){
    $session = session()->all();
    echo "<pre>";
    print_r($session);
    die;
});

Route::get("setSession",function(){
    echo session()->put(array("user_name"=>"akash","user_id"=>23)); 
});

Route::get("destroySession",function(){
    echo session()->forget("user_name","akash");
    
});

Route::get("/home",[HomeController::class,'index']);




//query-->
// SELECT ci_parking_places.*,ci_parking_slot_info.* from ci_parking_places left JOIN ci_parking_slot_info on ci_parking_places.fk_master_place_id = ci_parking_slot_info.place_id



// https://spruko.com/demo/dashtic/Dashtic/Html/index.html
// https://themesbrand.com/skote-django/layouts/vertical-dark.html
// https://www.nobleui.com/html/template/demo1/dashboard.html


// https://nextjs.spruko.com/spruha/preview/components/dashboard/dashboard/

// https://preview.themeforest.net/item/hud-bootstrap-5-admin-template/full_screen_preview/34000752