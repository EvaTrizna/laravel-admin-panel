<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', 'App\Http\Controllers\PostController@allData')->name('welcome');

Route::get('/post/{id}', 'App\Http\Controllers\PostController@showOneMessage')->name('post-data-one');


Route::get('/dashboard/{id}/update', 'App\Http\Controllers\PostController@updateMessage') ->middleware(['auth', 'verified'])->name('post-update');

Route::post('/dashboard/{id}/update', 'App\Http\Controllers\PostController@updateMessageSubmit') ->middleware(['auth', 'verified'])->name('post-update-submit');

Route::get('/dashboard/{id}/delete', 'App\Http\Controllers\PostController@deleteMessage') ->middleware(['auth', 'verified'])->name('post-delete');

Route::get('/dashboard/{id}/visible', 'App\Http\Controllers\PostController@visibleMessage') ->middleware(['auth', 'verified'])->name('post-visible');
/*
*/
Route::get('/dashboard', [PostController::class, 'allDataAdmin'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
