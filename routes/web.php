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

     $data = [
        'title' => 'Magari fosse cosi facile!!',
        'text' => 'Saremmo tutti dei gran PRO',
        'num' => 89
    ];

    return view('home', $data);
});
