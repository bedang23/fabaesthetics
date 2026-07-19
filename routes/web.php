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
Route::get('/admin/enquiryform',[AdminController::class,'enquiryform']);


//Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/new-home', [FrontendController::class, 'newhome']);

//Landing Page
Route::get('landing-page',[FrontendController::class, 'landingpage']);
Route::post('landingpageformdata', [FrontendController::class, 'landingpageformsubmit'])->name('landingpageform.submit');
Route::get('/form-success', function () {
    return view('form-success');
})->name('form.success');


Route::get('/about', [FrontendController::class, 'about']);
Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact-us', [FrontendController::class, 'contactsubmit'])->name('contact.submit');
Route::get('service',[FrontendController::class, 'servicedetail']);

// Blog Route"
Route::get('/blogs', [FrontendController::class, 'blogList'])->name('blog.list');
Route::get('/blogs/{category}/{slug}', [FrontendController::class, 'showblog'])->name('blog.show');

// Service Route"
Route::get('/services/{category}/{slug}', [FrontendController::class, 'show'])->name('service.show');







//service
Route::get('/admin/service/list',[AdminController::class,'servicelist']);
Route::get('/admin/service/create',[AdminController::class,'servicecreate']);
Route::post('/admin/service/create',[AdminController::class,'saveservice']);
Route::get('/admin/service/edit/{id}',[AdminController::class,'serviceedit']);
Route::post('/admin/service/update/{id}',[AdminController::class,'updateservice']);
Route::get('/admin/service/delete/{id}',[AdminController::class,'deleteservice']);


//Blog
Route::get('/admin/blog/list',[AdminController::class,'bloglist']);
Route::get('/admin/blog/create',[AdminController::class,'blogcreate']);
Route::post('/admin/blog/create',[AdminController::class,'saveblog']);
Route::get('/admin/blog/edit/{id}',[AdminController::class,'blogedit']);
Route::post('/admin/blog/update/{id}',[AdminController::class,'updateblog']);
Route::get('/admin/blog/delete/{id}',[AdminController::class,'deleteblog']);