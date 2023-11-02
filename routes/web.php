<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;



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

Route::get('/login', function () {
    return view('Auth.loginregister');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about.about');
});


Route::get('login',[Authcontroller::class,'login'])->name('login');
Route::post('signup',[Authcontroller::class,'createuser'])->name('signup.create');
Route::post('login',[Authcontroller::class,'authenticate'])->name('login.authenticate');
Route::get('category1',[Authcontroller::class,'category1'])->name('category1.choose');
Route::get('category2',[Authcontroller::class,'category2'])->name('category2.choose');
Route::post('farmer',[Authcontroller::class,'farmerregister'])->name('farmer.register');
Route::post('client',[Authcontroller::class,'clientregister'])->name('client.register');

//editbtn admindashboard
Route::get('admin/dashboard',[Authcontroller::class,'admindashboard'])->name('admindashboard');
Route::get('/add',[Authcontroller::class,'addedit'])->name('addedit');
Route::post('submit',[Authcontroller::class,'formsave'])->name('form.submit');
Route::get('admin/dashboard',[Authcontroller::class,'display'])->name('display');





