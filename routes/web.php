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
    return view('pages.index');
});
Route::get('/sobre-nos', function () {
    return view('pages.sobre-nos');
});
Route::get('/sorologia', function () {
    return view('pages.sorologia');
});
Route::get('/dna', function () {
    return view('pages.dna');
});
Route::get('/contato', function () {
    return view('pages.contato');
});
Route::get('/noticias', function () {
    return view('pages.noticias');
});
Route::get('/beta-caseina', function () {
    return view('pages.beta-caseina');
});
Route::get('/homozigoze', function () {
    return view('pages.homozigoze');
});
Route::get('/genotipagem', function () {
    return view('pages.genotipagem');
});
Route::get('/parentesco', function () {
    return view('pages.parentesco');
});
Route::get('/aie', function () {
    return view('pages.aie');
});
Route::get('/mormo', function () {
    return view('pages.mormo');
});
Route::get('/perguntas-frequentes', function () {
    return view('pages.perguntas');
});
