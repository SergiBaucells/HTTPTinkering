<?php

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

use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prova_headers', function () {
    return response('<h1>Hola</h1>')->header('Content-Type', 'text/css');
});

Route::get('/download_manager', function (Request $request) {
    return response()->download(__DIR__ . '/../' . $request->file);
});

Route::get('/file_manager', function (Request $request) {
    return response()->file(__DIR__ . '/../' . $request->file);
});

Route::get('status_code', function (Request $request) {
//    return 'agfgagh';
    abort($request->code, "Status Code: $request->code");
});

Route::post('user', function (Request $request) {
    User::create($request->all());
    User::create($request->only(['user', 'password']));
});

// GUARD
Route::view('axios','axios')->middleware('auth');
Route::view('user2','user2')->middleware('auth');
Route::view('user3','user3')->middleware('auth');
Route::view('tokens','tokens')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
