<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;

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
// my php file

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/works', function () {
    return view('works');
})->name('works');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('post/create', function () {
    DB::table('post')->insert([
        'title'=>'Matematika',
        'body'=>'Try Mathematica for free.Trial includes a download of Mathematica, along with access to Mathematica Online.'
    ]);
});
Route::get('post', [BlogController::class,'index']);
Route::get('blog/index', function () {
    return view('client.create');
});
Route::post('blog/create', [BlogController::class,'store'])->name('add-client');