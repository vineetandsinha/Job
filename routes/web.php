<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:web'])->group(function () {
    //job
    Route::resource('jobs','\App\Http\Controllers\JobsController');
    //list-applicant
    Route::get('list-applicant', '\App\Http\Controllers\JobsController@list');
    //resume-download
    Route::get('resume-download/{id}', '\App\Http\Controllers\JobsController@download')->name('resume.download');
});
Auth::routes();
Route::resource('job-applications','\App\Http\Controllers\JobApplicationController');


