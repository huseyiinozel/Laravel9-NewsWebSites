<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Comment
*/
// 1-route ile bir seyler yaptirmak
Route::get('/hello', function () {
    return 'Hello World';
});


// 2 - view cagiriyoruz
Route::get('/welcome', function () {
    return view('welcome');
});

// 3- controller fonksiyonu ile cagiriyoruz
Route::get('/index',[HomeController::class,'index'])->name('home');

//4 - route -> controller -> view
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5- parametre ile route
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6 post ile route almak

Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
