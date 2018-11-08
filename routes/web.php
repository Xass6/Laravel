<?php

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
Route::get('/contact', 'View@contact');
Route::get('/addSeries', 'View@addSeries');
Route::get('/Series', 'View@showSeries');
Route::get('/listactor', 'View@listactor');
Route::get('/addactor', 'View@addactor');
Route::get('/listgenres', 'View@listgenres');
Route::get('/addgenres', 'View@addgenres');

Route::post('/insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteOne');
Route::post('/updateserie', 'View@updateForm');
Route::post('/updateserieaction', 'Serie@updateOne');
Route::post('/insertactor', 'Serie@insertactor');
Route::post('/deleteactor', 'Serie@deleteactor');
Route::post('/insertgenres', 'Serie@insertgenres');
Route::post('/deletegenres', 'Serie@deletegenres');
