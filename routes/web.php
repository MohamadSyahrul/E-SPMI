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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function () {
    return view('pages.dashboard');
});
Route::get('/auditor',function () {
    return view('pages.managemen_akun.auditor.index');
});
// Route::get('/auditor', 'ManagemenContrroller@index');


// Route::any('/{page?}',function(){
//     return view('pages.error.404');
// })->where('page','.*');
