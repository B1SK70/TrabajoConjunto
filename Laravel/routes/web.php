<?php

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

Route::get("/", [ViewController::class, "index"])->name("index");
Route::get("/TiposPatata", [ViewController::class, "tipos"])->name("tipos");
Route::get("/Historia", [ViewController::class, "historia"])->name("historia");
Route::get("/Contacto", [ViewController::class, "contacto"])->name("contacto");
