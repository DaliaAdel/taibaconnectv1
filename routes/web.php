<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

//  Route::get('/','ProductController@index');
 Route::get('/', [ProductController::class, 'index']);


// Route::resources([
//     '/' => ProductController::class,
//     // 'posts' => PostController::class,
// ]);
