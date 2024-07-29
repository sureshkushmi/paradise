<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/collections', function () {
    return view('pages.collections');
})->name('luga.collection');
Route::post('/submit-form', function (Request $request) {
    // Process the form data

    // Add a flash message to the session
    $request->session()->flash('status', 'Thank you for your submission!');

    // Redirect back to the form page
    return redirect()->back();
})->name('submit-form');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
