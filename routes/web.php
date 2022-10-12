<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Promise;

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

Route::get('/users', function () {
    return view('users', [
        'users' => User::all()
    ]);

});

Route::get('/promises', function () {
    return view('promises', [
        'promises' => Promise::all()->where('public', '=', '1')
    ]);

});


Route::get('/login', function (){
    return view('login');
});

Route::post('/login', function (){
    $data = request();
});

