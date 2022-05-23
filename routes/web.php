<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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




Route::post('/save',[MainController::class,'save'])->name('save');

Route::post('/check',[MainController::class,'check'])->name('check');



Route::group(['middleware'=>['AuthCheck']], function(){
	Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');

	Route::get('/register',[MainController::class,'register'])->name('register');	

	Route::get('/login',[MainController::class,'login'])->name('login');

});

Route::post('/add_to_cart',[MainController::class,'addToCart']);

Route::get('logout', function(){
	Session::forget('LoggedUser');
	return redirect('login');
});
