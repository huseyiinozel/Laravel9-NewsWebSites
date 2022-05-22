<?php

use App\Http\Controllers\AdminPanel\AdminNewsController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is . where you can register web routes for your application. These
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

// Home Pages
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
//4 - route -> controller -> view
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5- parametre ile route
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6 post ile route almak

Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/news/{id}',[HomeController::class,'news'])->name('news');
Route::get('/categorynews/{id}/{slug}',[HomeController::class,'categorynews'])->name('categorynews');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// admin panel
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminHomeController::class,'index'])->name('index');
// admin panel general
Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name('setting.update');


// admin category routes
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
});
    // admin news routes
    Route::prefix('/news')->name('news.')->controller(AdminNewsController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    // admin image routes
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{nid}','index')->name('index');
        Route::post('/store/{nid}','store')->name('store');
        Route::get('/destroy/{nid}/{id}','destroy')->name('destroy');

    });
    // admin message
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    // admin faq routes
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    // admin comment
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });


});
