<?php

use App\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])
->group(function() {
    Route::get('/',function () {
        return view('pages.dashboard');
    });

    Route::prefix('managemen-akun')->group(function () {
        Route::resource('akun-auditor', 'ManagemenController');
        Route::resource('akun-staf', 'StafController');
        Route::resource('akun-wakil-ketua', 'WakilketuaController');
    });
    Route::resource('standar-nasional', 'StandarnasionalController');

    // waketu
    Route::resource('jabatan', 'Waketu\JabatanController');
    Route::resource('penanggung-jawab', 'Waketu\PenanggungjwbController');
    Route::resource('unit', 'Waketu\UnitController');
    Route::get('data-staf', function () {
        $items = User::where('level', 'staf')->get();
        return view('pages.wakilketua.staf.index', compact('items'));
    })->name('data-staf');
    Route::resource('deskripsi-pekerjaan', 'Waketu\DisperController');
    



});


// Route::get('/auditor', 'ManagemenContrroller@index');


// Route::any('/{page?}',function(){
//     return view('pages.error.404');
// })->where('page','.*');
