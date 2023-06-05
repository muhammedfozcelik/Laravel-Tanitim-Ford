<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\App;
use App\Http\Controllers\adminannouncementcontroller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminUser;
use App\Http\Controllers\messageController;


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

    Route::get('admin/announcements',[adminannouncementcontroller::class, 'adminannouncementindex'])->name('adminannouncement');
    Route::post('/announcements',[adminannouncementcontroller::class, 'store'])->name('adminannouncement.store');

    Route::resource('users', users::class);
    Route::get('/admin',[AuthManager::class,'admin'])->name('admin');
    Route::get('/adminmessage',function (){
        return view('admin/message');
    })->name('adminmessage');


Route::get('/announcements',[adminannouncementcontroller::class,'announcements'])->name('announcements');
Route::get('/announcement',[adminannouncementcontroller::class,'announcement'])->name('announcement');
Route::resource('/announcement',adminannouncementcontroller::class);
Route::get('/profile',[users::class, 'profile'])->name('profile');
Route::put('/profile',[users::class,'update'])->name('profile.edit');
Route::get('/admin/users',[AdminUser::class,'index'])->name('users');
Route::get('/admin/edit/{id}',[AdminUser::class,'edit']);
Route::put('update-data/{id}',[AdminUser::class,'update']);
Route::get('/admin/add',[AdminUser::class,'add']);
Route::post('insert-data',[AdminUser::class,'insert']);
Route::get('delete/{id}',[AdminUser::class,'remove']);
Route::get('/message',[messageController::class,'index'])->name('message');
Route::post('message',[messageController::class,'send'])->name('send');


Route::get('/', function (){
    return view('mainpage');
})->name('home');


Route::get('/message',[App::class, 'message'])->name('message');




Route::get('/login',[AuthManager::class, 'login'])->name('login');
Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register',[AuthManager::class, 'register'])->name('register');
Route::post('/register',[AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


