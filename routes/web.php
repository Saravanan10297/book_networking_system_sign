<?php

use App\Http\Controllers\Authuser;
use App\Http\Controllers\Bookdetails;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialAuthController;

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

Route::get('/index',[Bookdetails::class,'Index'])->name('Books.index');
Route::get('/create',[Bookdetails::class,'create'])->name('Books.create');
Route::post('/store',[Bookdetails::class,'store'])->name('Books.store');
Route::get('/login',[Authuser::class,'login'])->name('Books.login');
Route::post('/logincheck',[Authuser::class,'logincheck'])->name('Books.logincheck');
Route::get('/signup',[Authuser::class,'signup'])->name('Books.signup');
Route::post('/signupstore',[Authuser::class,'signupstore'])->name('Books.signupstore');
Route::get('/search',[Bookdetails::class,'search'])->name('Books.search');
// Route::post('/searchtable',[Bookdetails::class,'searchtable'])->name('Books.searchtable');

Route::get('/logout',[Authuser::class,'logout'])->name('Books.logout');

// Route::middleware(['auth'])->group(function () {
//     // Your protected routes here
// });

Route::get('/listofBooks',[Bookdetails::class,'listofBooks'])->name('Books.listofBooks');
Route::post('/storelist',[Bookdetails::class,'storelist'])->name('Books.storelist');


Route::get('login/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('login/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
