<?php

use App\Http\Controllers\ComicController;
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

Route::get('/',"PagesController@index")->name('home');


//cosi creo la rotta che reindirizza al controller ComicController che e' quello della crud (resource)
//con :: class gli passo tutti i return delle funzioni che sono dentro a ComicController

//con resource creo un controller che avra' al suo interno un controller con i comandi necessari per le CRUD
Route::resource('/comics' , 'ComicController' );


//Route::resource('/comics' , ComicController::class );
//chiedere perche' non funziona con questa sintassi



// per vedere le rotte:  php artisan route:list -v





