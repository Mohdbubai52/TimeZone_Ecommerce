<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/',[HomeController::class,'header']);
Route::get('/home',[HomeController::class,'Home']);
Route::get('/shop',[HomeController::class,'Shop']);
Route::get('/cart',[HomeController::class,'Cart']);
Route::get('/about',[HomeController::class,'About']);
Route::get('/blog',[HomeController::class,'Blog']);
Route::get('/checkout',[HomeController::class,'CheckOut']);
Route::get('/confirmation',[HomeController::class,'Confirmation']);
Route::get('/contact',[HomeController::class,'Contact']);


// Registration Method call for entering data from user
Route::get('/signin',[RegisterController::class,'index']);// call the Registration Page for display
Route::post('/signin',[RegisterController::class,'SaveData']); //Help to get data from form data as well as files and other stuff

// Login Method
Route::get('/login',[LoginController::class,'LogIn']);
Route::post('/login',[LoginController::class,'LogInAuthenthication']);

// Custome Admin Pannels

Route::get('/AdminPannel',[AdminController::class,'AdminPage']);

// Brand Route 
Route::get('/AdminPannel/Brands',[BrandController::class,'Index']);

//creating new brand details  in table
Route::get('/AdminPannel/Brands/Create',[BrandController::class,'Create']);
Route::post('/AdminPannel/Brands/Create',[BrandController::class,'SaveInfo']);
// Route::get('/AdminPannel/Brands/Create',[BrandController::class,'SaveInfo']);