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


Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('/');
Route::get('/about',[App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/services',[App\Http\Controllers\IndexController::class, 'services'])->name('services');
Route::get('/gallery',[App\Http\Controllers\IndexController::class, 'gallery'])->name('gallery');


Route::get('/admin/login',[App\Http\Controllers\AdminController::class, 'index'])->name('login');
Route::post('/admin/loginCheck',[App\Http\Controllers\AdminController::class, 'login'])->name('loginCheck');
Route::middleware('auth:sanctum')->get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin/dashboard');
Route::middleware('auth:sanctum')->get('/admin/enquiries',[App\Http\Controllers\AdminController::class, 'enquiries'])->name('admin/enquiries');
Route::middleware('auth:sanctum')->get('/admin/enquiries/delete/{id}',[App\Http\Controllers\AdminController::class, 'deleteEnquiry'])->name('admin/enquiries/delete');
Route::middleware('auth:sanctum')->get('/admin/enquiries/view/{id}',[App\Http\Controllers\AdminController::class, 'viewEnquiry'])->name('admin/enquiries/view');
Route::middleware('auth:sanctum')->get('/admin/logout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin/logout');

Route::POST('/enquiry/add',[App\Http\Controllers\AdminController::class, 'addEnquiry'])->name('enquiry/add');





