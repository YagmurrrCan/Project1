<?php

use App\Http\Controllers\admin\indexController;
use App\Http\Controllers\admin\kullanici;
use App\Http\Controllers\front\PagesController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["namespace"=>"admin_css", "prefix"=>"admin_css", "as"=>"admin_css."],function(){
    Route::get("/", [indexController::class,"index"])->name("index");

    Route::group(["namespace"=>"yayinevi", "prefix"=>"yayinevi", "as"=>"yayinevi."], function(){
        Route::get('/', [indexController::class, "index"])->name("index");

    });

    Route::group(["namespace"=>"kullanici", "prefix"=>"kullanici"], function(){
        Route::get("/ekle", [indexController::class, "ekle"]);

    });

});

Route::group(["namespace"=>"front", "prefix"=>"/"], function(){
    Route::get("/", [PagesController::class, "home"]);

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
});



