<?php

use App\Models\Promise;
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

Route::get('/promises', function (Promise $promise) {
    return view('promise', [
        'promise' => $promise
    ]);
});

Route::get('/promises/{promise}', function (Promise $promise) {
    return view('promise', [
        'promise' => $promise
    ]);
});
