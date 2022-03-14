<?php

use App\Http\Controllers\PostController;
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
Route::prefix('post')->group(function(){
    Route::get('list',[PostController::class,'index'])->name('post.list');
    Route::get('showFormCreate',[PostController::class,'create'])->name('post.showFormCreate');
    Route::post('create',[PostController::class,'store'])->name('post.create');
    Route::get('showFormUpdate',[PostController::class,'edit'])->name('post.showFormUpdate');
    Route::post('{id}/update',[PostController::class,'update'])->name('post.update');
    Route::get('{id}/delete',[PostController::class,'destroy'])->name('post.delete');
    Route::get('{id}/detail',[PostController::class,'show'])->name('post.detail');

});

