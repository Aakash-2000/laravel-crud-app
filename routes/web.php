<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
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
Route::get('/',function(){
    return redirect('/library');
});

Route::get('/library',[LibraryController::class, 'index']);
Route::post('/library',[LibraryController::class,'add']);
Route::post('/library/edit/{id}',[LibraryController::class,'editItem']);
Route::get('/library/edit/{id}',[LibraryController::class,'edit']);
Route::get('/library/create',[LibraryController::class, 'create']);
Route::get('/library/delete/{id}',[LibraryController::class, 'delete']);

