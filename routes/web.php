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
        'title' => 'Prove ignoranti di Laravel',
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

Route::get('/list', function () {

    $names = [
        'Claudio Salvatore Aiello',
        'Davide Atzori',
        'Roy Ettore Junior Bagnarola',
        'Daniele Balestro',
        'Bimal Benvenuti',
        'Filippo Bonafini',
        'Luca Brivio',
        'Luca Collaro',
        'Nicholas Conti',
        'Vittorio Corradi',
        'Rosa Durantini',
        'Danilo Eberli',
        'Marco Ferrari',
        'Mattia Fezzardi',
        'Giovanni Franchi',
        'Giorgia Galbulli Cavazzini',
        'Maurizio Gallotti',
        'Alberto Gioia',
        'Mikel Gremi',
        'Alessandro Iero',
        'Marcello Leone',
        'Gaspare Monte',
        'Luca Paolella',
        'Cosimo Petrarca',
        'Gianluca Pinna',
        'Ivan Rizzo',
        'Vittoria Romano',
        'Eugenia Rossi',
        'Massimiliano Sabatino',
        'Leonardo Sallustio',
        'Giulia Tognali',
        'Agatino Tringali',
        'Riccardo Turella',
        'Emanuele Volpes',
        'Luca Zanfrisco',
    ];

   return view('list', ['names' => $names]);
});