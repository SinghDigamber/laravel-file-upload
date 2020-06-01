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

// Create file upload form
Route::get('/upload-file', 'FileUpload@createForm');

// Store file
Route::post('/upload-file', 'FileUpload@fileUpload')->name('fileUpload');
