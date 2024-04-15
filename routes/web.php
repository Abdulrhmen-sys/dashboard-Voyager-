<?php
use App\Http\Controllers\postController;
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

Route::get('/' ,[postController::class , 'index']);
Route::view("/about" , "about")->name("about");
Route::get('/post/{id}', [postController::class , 'show']);
// Route::view("/contact" , 'contact')->name("contact");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
