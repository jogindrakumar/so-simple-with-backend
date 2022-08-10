<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Models\Admin;
use App\Models\About;

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

Route::get('/', function () {
    $abouts = About::first();
    return view('home',compact('abouts'));
})->name('home');
Route::get('/about', function () {
    $abouts = About::first();
    return view('frontend.about',compact('abouts'));
})->name('about');

Route::get('/project', function () {
    return view('frontend.project');
})->name('project');
Route::get('/contact', function () {
    $abouts = About::first();
    return view('frontend.contact',compact('abouts'));
})->name('contact');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//admin route
Route::group(['prefix' => 'admin', 'middleware'=>['admin:admin']],function(){

    Route::get('/login',[AdminController::class,'loginForm']);
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');

   

});

 //Admin All routes
 Route::prefix('admin')->middleware(['auth:admin'])->group(function(){
 Route::get('/logout',[AdminController::class,'destroy'])->name('admin.logout');
 Route::get('/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');
 Route::get('/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');
 Route::post('/profile/store',[AdminProfileController::class,'AdminProfileStore'])->name('admin.profile.store');
 Route::get('/change/password',[AdminProfileController::class,'AdminChangePassword'])->name('admin.change.password');
 Route::post('/update/password',[AdminProfileController::class,'AdminUpdatePassword'])->name('update.change.password');
 });

 Route::prefix('about')->middleware(['auth:admin'])->group(function(){

    Route::get('/view',[AboutController::class,'index'])->name('about.view');
    Route::get('/create',[AboutController::class,'create'])->name('about.create');
    Route::post('/store',[AboutController::class,'store'])->name('about.store');
    Route::get('/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
    Route::post('/update/{id}',[AboutController::class,'update'])->name('about.update');
 });
 Route::prefix('project')->middleware(['auth:admin'])->group(function(){

    Route::get('/view',[ProjectController::class,'index'])->name('project.view');
    Route::get('/create',[ProjectController::class,'create'])->name('project.create');
    Route::post('/store',[ProjectController::class,'store'])->name('project.store');
    Route::get('/edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
    Route::post('/update/{id}',[ProjectController::class,'update'])->name('project.update');
 });

 
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
