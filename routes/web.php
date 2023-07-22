<?php

use App\Http\Controllers\catatancontroller;
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

Route::get('/detail', function () {
    return view('detail');
});

route::get('/',[catatancontroller::class,'index']);
route::post('/create',[catatancontroller::class,'store']);
route::get('/detail/{id}', [catatancontroller::class ,'show']);
route::get('/edit/{id}', [catatancontroller::class ,'edit']);
route::get('/delete/{id}', [catatancontroller::class ,'destroy']);
route::get('/update',[catatancontroller::class,'update']);