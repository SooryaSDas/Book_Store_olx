<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\UserController;


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
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/dashboard',[MainCategorycontroller::class,"index"])->middleware(['auth'])->name('dashboard');

Route::get('/postads',[UserController::class,"index"]);

// Route::get('/viewAds/{maincategory}/{id}',[UserController::class,"viewAds"]);

Route::get('/viewAds/{maincategory}/{id}',[UserController::class,"categories"]);

Route::get('/postbooks', function (){
    return view('users.postbooks');
});

Route::post('/actionadventure',[UserController::class,"actionadventure"]);

require __DIR__.'/auth.php';
