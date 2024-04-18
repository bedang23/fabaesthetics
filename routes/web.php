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


//Admin Panel
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin/login',[AdminController::class,'doLogin']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin/contact',[AdminController::class,'contact']);


//Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact-us', [FrontendController::class, 'contactsubmit'])->name('contact.submit');
Route::get('service',[FrontendController::class, 'servicedetail']);
Route::get('/{category}/{service}',[FrontendController::class, 'show'])->name('service.show');


//service
Route::get('/admin/service/list',[AdminController::class,'servicelist']);
Route::get('/admin/service/create',[AdminController::class,'servicecreate']);
Route::post('/admin/service/create',[AdminController::class,'saveservice']);
Route::get('/admin/service/edit/{id}',[AdminController::class,'serviceedit']);
Route::post('/admin/service/update/{id}',[AdminController::class,'updateservice']);
Route::get('/admin/service/delete/{id}',[AdminController::class,'deleteservice']);

