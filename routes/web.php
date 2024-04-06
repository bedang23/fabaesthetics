<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CKEditorController;

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
    return view('welcome');
});


Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact-us', [FrontendController::class, 'contactsubmit'])->name('contact.submit');



//Admin Panel
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin/login',[AdminController::class,'doLogin']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
// Route::get('/admin/logout',[AdminController::class,'logout']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

