<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TestimonialController;
use App\Models\clients;
use App\Models\testimonial;
use Illuminate\Support\Facades\Auth;
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
    $video=testimonial::orderBy('id')->limit(1)->get();
    $image=clients::get();
    return view('welcome',compact('image','video'));
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\UserController::class, 'admin'])->name('admin');

//testimonial

Route::get('addtestimonial',[TestimonialController::class,'testimonial'])->name('addtestimonial');
Route::get('testimonial',[TestimonialController::class,'testimonialtable'])->name('testimonial');
Route::post('testimonialstore',[TestimonialController::class,'testimonialstore'])->name('teststore');
Route::post('/testimonialupdate/{id}',[TestimonialController::class,'testimonialupdate'])->name('testimonialupdate');
Route::get('/testimonialedit/{id}',[TestimonialController::class,'testimonialedit'])->name('testimonialedit');
Route::delete('/testimonialDestroy/{id}',[TestimonialController::class,'testimonialDestroy'])->name('testimonialDestroy');


//image
Route::get('client',[ClientsController::class,'client'])->name('client');
Route::post('clientstore',[ClientsController::class,'clientstore'])->name('clientstore');
Route::get('clientView',[ClientsController::class,'clienttable'])->name('clienttable');
Route::delete('/clientDestroy/{id}',[ClientsController::class,'clientDestroy'])->name('clientDestroy');
Route::post('/clientupdate/{id}',[ClientsController::class,'clientupdate'])->name('clientupdate');
Route::get('/clientedit/{id}',[ClientsController::class,'clientedit'])->name('clientedit');


//website
