<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Models\userModel;

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
    return view('main');
});
Route::get('form',function(){
    return view('crud.form');
});
Route::post('store',[userController::class,'store']);
Route::get('show',[userController::class,'show']);
Route::get('destroy/{id}',[userController::class,'destroy']);
Route::get('edit/{id}',[userController::class,'edit']);
Route::get('edit/update/{id}',[userController::class,'update']);