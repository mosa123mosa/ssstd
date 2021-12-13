<?php

use Illuminate\Support\Facades\Route;
use   App\Http\Controllers\contentController;

Route::get('/' , [contentController::class , 'index'])->name('index');
Route::get('/create' , [contentController::class , 'create']);
Route::post('/store' ,[contentController::class , 'store'] );
Route::get('/edit/{id}' , [contentController::class , 'edit']);
Route::post('/update/{id}' , [contentController::class , 'update']);
Route::get('/destroe/{id}' ,[contentController::class , 'destroe']  );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
