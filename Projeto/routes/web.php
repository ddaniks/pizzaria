<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/login', function () {
    return view('public.login');
});

//Route::get('/landing', function () {
//    return view('public.landing');
//});


Route::get('/landing', [PublicController::class, 'landing']);

/*Route::get('/template', function () {
    return view('common.basic-template');
});*/

Route::get('/cardapio', [PublicController::class, 'cardapio']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/atv',[PublicController::class,'atv']);




