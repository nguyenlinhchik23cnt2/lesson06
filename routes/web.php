<?php

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
    return view('welcome');
});
//test session
Route::get('/nlc-session/get',[nlcsessioncontroller::class,'nlcgetsessiondata'])->name('nlcsession.get');
Route::get('/nlc-session/get',[nlcsessioncontroller::class,'nlcstoresessiondata'])->name('nlcsession.set');
Route::get('/nlc-session/get',[nlcsessioncontroller::class,'nlcdeletessessiondata'])->name('nlcsession.delete');
#account 


