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


/*
| 2021/11/03
|
| Route::get('/', 'TopPageController@show');
/*
|　not working 
 */

/* note defalt checked can use 
*/
Route::get('/', function () {
    return view('top');
});


Route::get('/about', function () {
    return view('about');
});
/*
*/


/*
//トップページ
Route::get('/', 'TopPageController@show');

//会社概要ページ
Route::get('/about', 'AboutPageController@show');
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
