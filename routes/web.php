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



Route::get('/',[MainCategorycontroller::class,"home"])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/dashboard',[MainCategorycontroller::class,"index"])->middleware(['auth'])->name('dashboard');

Route::get('/postads',[UserController::class,"index"]);

// Route::get('/viewAds/{maincategory}/{id}',[UserController::class,"viewAds"]);

Route::get('/post-classified-ads/{maincategory}/{id}',[UserController::class,"categories"]);

Route::get('/postbooks', function (){
    return view('users.postbooks');
});

Route::post('/actionadventure',[UserController::class,"actionadventure"]);

Route::post('/classics',[UserController::class,"classics"]);

Route::post('/biographies',[UserController::class,"biographies"]);

Route::post('/commic',[UserController::class,"commic"]);

Route::post('/detective',[UserController::class,"detective"]);

Route::post('/essays',[UserController::class,"essays"]);

Route::post('/historical',[UserController::class,"historical"]);

Route::post('/horror',[UserController::class,"horror"]);

Route::post('/sciencefiction',[UserController::class,"sciencefiction"]);

Route::post('/shortstories',[UserController::class,"shortstories"]);

Route::get('UserController/getads',[UserController::class,"getads"])->name('categories.ads');

Route::get('/viewads/{maincategory}/{id}',[UserController::class,"viewads"]);
// search ads
Route::post('/product/search',[UserController::class,"searchproduct"]);
// product full view
Route::get('/product/view/{id}',[UserController::class,"viewproduct"]);
// add to cart
Route::post('/addtocart',[MainCategorycontroller::class,"addtocart"]);
// cart listing
Route::get('/cartlist',[MainCategorycontroller::class,"cartlist"]);
// remove from cart
Route::get('/removefromcart/{id}',[MainCategorycontroller::class,"removefromcart"]);
// my ads display
Route::get('/mysellingbooks',[MainCategorycontroller::class,"mysellingbooks"]);
// remove from the advertisement
Route::get('/removefromads/{id}',[MainCategorycontroller::class,"removefromads"]);
// update cart quntity
Route::post('/updatecart', [MainCategoryController::class, "updatecart"]);
require __DIR__.'/auth.php';


                    
