<?php

use App\Http\Controllers\admin\yayinevi;
use App\Http\Controllers\admin\yazar;
use App\Http\Controllers\admin\kitap;
use App\Http\Controllers\admin\kategori;
use App\Http\Controllers\admin\slider;
use App\Http\Controllers\admin\marka;
use App\Http\Controllers\front;
use App\Http\Controllers\admin\kalem;
use App\Http\Controllers\admin\indexController;
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


Route::group(["namespace"=>"admin", "prefix"=>"admin", "as"=>"admin."],function(){
    Route::get("/", [indexController::class,"index"])->name("index");

    Route::group(["namespace"=>"yayinevi", "prefix"=>"yayinevi", "as"=>"yayinevi."], function(){
        Route::get('/', [yayinevi\indexController::class, "index"])->name("index");
        Route::get("/ekle", [yayinevi\indexController::class, "create"])->name("create");
        Route::post("/ekle", [yayinevi\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [yayinevi\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [yayinevi\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [yayinevi\indexController::class, "delete"])->name("delete");
    });

    Route::group(["namespace"=>"yazar", "prefix"=>"yazar", "as"=>"yazar."], function(){
        Route::get('/', [yazar\indexController::class, "index"])->name("index");
        Route::get("/ekle", [yazar\indexController::class, "create"])->name("create");
        Route::post("/ekle", [yazar\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [yazar\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [yazar\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [yazar\indexController::class, "delete"])->name("delete");
    });

    Route::group(["namespace"=>"kitap", "prefix"=>"kitap", "as"=>"kitap."], function(){
        Route::get('/', [kitap\indexController::class, "index"])->name("index");
        Route::get("/ekle", [kitap\indexController::class, "create"])->name("create");
        Route::post("/ekle", [kitap\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [kitap\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [kitap\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [kitap\indexController::class, "delete"])->name("delete");
    });

    Route::group(["namespace"=>"kategori", "prefix"=>"kategori", "as"=>"kategori."], function(){
        Route::get('/', [kategori\indexController::class, "index"])->name("index");
        Route::get("/ekle", [kategori\indexController::class, "create"])->name("create");
        Route::post("/ekle", [kategori\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [kategori\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [kategori\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [kategori\indexController::class, "delete"])->name("delete");
    });

    Route::group(["namespace"=>"kalem", "prefix"=>"kalem", "as"=>"kalem."], function(){
        Route::get('/', [kalem\indexController::class, "index"])->name("index");
        Route::get("/ekle", [kalem\indexController::class, "create"])->name("create");
        Route::post("/ekle", [kalem\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [kalem\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [kalem\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [kalem\indexController::class, "delete"])->name("delete");
    });

    Route::group(["namespace"=>"marka", "prefix"=>"marka", "as"=>"marka."], function(){
        Route::get('/', [marka\indexController::class, "index"])->name("index");
        Route::get("/ekle", [marka\indexController::class, "create"])->name("create");
        Route::post("/ekle", [marka\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [marka\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [marka\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [marka\indexController::class, "delete"])->name("delete");
    });

    Route::group(["namespace"=>"slider", "prefix"=>"slider", "as"=>"slider."], function(){
        Route::get('/', [slider\indexController::class, "index"])->name("index");
        Route::get("/ekle", [slider\indexController::class, "create"])->name("create");
        Route::post("/ekle", [slider\indexController::class, "store"])->name("create.post");
        Route::get("/düzenle/{id}", [slider\indexController::class, "edit"])->name("edit");
        Route::post("/düzenle/{id}", [slider\indexController::class, "update"])->name("edit.post");
        Route::get("/sil/{id}", [slider\indexController::class, "delete"])->name("delete");
    });

});

Route::group(["namespace"=>"front", "prefix"=>"/"], function(){
    Route::get("/", [\App\Http\Controllers\front\indexController::class, "index"])->name("index");
});

Route::get("/kitap/kitapdetay/{selflink}", [front\kitap\indexController::class, "index"])->name("kitap.detay");

Route::get("/kalem/kalemdetay/{selflink}", [front\kalem\indexController::class, "index"])->name("kalem.detay");

Route::get("/eklenen/add/{id}", [front\eklenen\indexController::class, "add"])->name("eklenen.add");
Route::get("/eklenen", [front\eklenen\indexController::class, "index"])->name("eklenen.index");
Route::get("/eklenen/remove/{id}", [front\eklenen\indexController::class, "remove"])->name("eklenen.remove");


Route::post("/logout", [\App\Http\Controllers\Auth\LoginController::class, "logout"])->name("logout");
Route::post("/user/login", [\App\Http\Controllers\Auth\LoginController::class, "userLogin"])->name("userLogin");

