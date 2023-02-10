<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;

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
    return view('landing');
});
Route::get('/member', [pagecontroller::class,'member']);
Route::get('/tambah', [pagecontroller::class,'tambah']);
Route::post('/create', [pagecontroller::class,'store']);
Route::delete('/member/{id}', [pagecontroller::class,'destroy']);
Route::get('/member/{id}/edit',[pagecontroller::class,'edit']);
Route::post('/member/{id}/edit', [pagecontroller::class,'update']);