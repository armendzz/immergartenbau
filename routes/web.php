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

Route::get('/', function () {

    $imageDir = public_path('img');
$images = [];

foreach (scandir($imageDir) as $path) {
    if (!is_dir($imageDir . '/' . $path)) {
        $images[] = $path;
    }
}

    return view('home', ['images' => $images]);
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/webmail', function () {
    return Redirect::to('https://31.220.29.100:8888/webmail/');
});
