<?php

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::resource('projects', ProjectController::class);


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/index', [App\Http\Controllers\profileController::class, 'index'])->name('profile.index');

Route::get('/profile/{id}', [App\Http\Controllers\profileController::class, 'edit'])->name('profile');

Route::post('/comment/postComment', [\App\Http\Controllers\CommentController::class, 'postComment'])->name('postComment');
Route::get('/comment/edit/{id}', [\App\Http\Controllers\CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comment/update/{id}', [\App\Http\Controllers\CommentController::class, 'update'])->name('comments.update');
Route::delete('/comment/destroy/{id}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');


Route::post('/profile/update/{id}', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/users', [UserController::class, 'select_all']);
Route::delete('/users/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
