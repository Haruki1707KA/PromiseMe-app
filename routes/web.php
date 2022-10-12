<?php

use App\Models\Promise;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {

    $data = request()->validate([
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'username' => 'required',
        'password' => 'required'
    ]);

    //dd($data);

    User::create($data);
});





Route::get('/promises', function () {
    return view('promises', [
        'promises' => Promise::all()->sortByDesc('created_at')
    ]);
});




Route::post('/login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255',
        'password' => 'required|max:255'
    ]);

    if(!auth()->attempt($attributes, request()->get('remember'))){
        throw ValidationException::withMessages([
            'email' => 'Credentials are incorrect',
        ]);
    }

    session()->regenerate();
    return redirect('/')->with('success', 'Logged in succesfully!');
});
