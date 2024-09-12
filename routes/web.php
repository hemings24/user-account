<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\Settings\EmailController;
use App\Http\Controllers\Settings\PasswordController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){return view('home');});
Route::get('/home', [HomeController::class,'index']) ->name('home');

Auth::routes(['verify' => true]);

Route::get('/settings/profile',  [ProfileController::class,'edit'])    ->name('settings.profile.edit');
Route::put('/settings/profile',  [ProfileController::class,'update'])  ->name('settings.profile.update');
Route::get('/settings/email',    [EmailController::class,'edit'])      ->name('settings.email.edit');
Route::put('/settings/email',    [EmailController::class,'update'])    ->name('settings.email.update');
Route::get('/settings/password', [PasswordController::class,'edit'])   ->name('settings.password.edit');
Route::put('/settings/password', [PasswordController::class,'update']) ->name('settings.password.update');