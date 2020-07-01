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
    return view('homepage');
})-> name('homepage');

Route::get('/faq', function () {
    $faqs_prima = config('faq.lista_faq_prima');
    $faqs_dopo = config('faq.lista_faq_dopo');
    return view('faq')->with(['faqs_prima'=> $faqs_prima,'faqs_dopo' => $faqs_dopo]);
})-> name('faq');
