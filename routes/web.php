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
        'title' => 'Usiamo Laravel in maniera super facile',
        'num' => 89,
        'person' => 'Cosimo Petrarca'
    ];

    return view('home', $data);
});

Route::get('/class', function () {

    $data = [
       'title' => 'Cosimo Petrarca',
       'text' => 'Da quanto la foto dimostri Cosimo è un giovane genio della programmazione che ha sempre avuto una passione per la tecnologia. Passa ore e ore al computer, scrivendo codice e risolvendo problemi che gli altri programmatori trovavano impossibili.',
       'back' => 'Torna indietro'
   ];

   return view('class', $data);
});
