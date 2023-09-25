<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

// LOGIN->Register->LOGOUT
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('user.register');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/tableuser',[HomeController::class,'tableuser'])->name('index');

Route::get('/create',[HomeController::class,'create'])->name('user.create');

Route::post('/store',[HomeController::class,'store'])->name('user.store');

Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');
Route::put('/update/{id}',[HomeController::class,'update'])->name('user.update');
Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');

Route::get('/rkap',[EmployeeController::class,'table'])->name('rkap');
Route::get('/createrkap',[EmployeeController::class,'tambah'])->name('createrkap');
Route::post('/insertdata',[EmployeeController::class,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[EmployeeController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class,'updatedata'])->name('updatedata');
Route::delete('/deletedata/{id}',[EmployeeController::class,'deletedata'])->name('deletedata');
Route::get('/exportpdf',[EmployeeController::class,'exportpdf'])->name('exportpdf');
Route::get('/exportexcel',[EmployeeController::class,'exportexcel'])->name('exportexcel');
Route::post('/importexcel',[EmployeeController::class,'importexcel'])->name('importexcel');