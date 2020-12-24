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



Route::get('pocetna',function(){
    return view('home');
})->name('home');

Route::get('o-nama',function(){
    return view('about');
})->name('about');

Route::get('blog',function(){
    return view('blog');
})->name('blog');

Route::get('projekti',function(){
    return view('portfolio');
})->name('portfolio');

Route::get('slike',function(){
    return view('studio');
})->name('studio');

Route::get('kontakt',function(){
    return view('contact');
})->name('contact');

Route::post('posalji','App\Http\Controllers\HomeController@sendMessage')->name('send-message');


Route::get('historija',function(){
    return view('history');
})->name('history');

Route::get('dizajn',function(){
    return view('desing');
})->name('desing');

Route::get('razvoj',function(){
    return view('development');
})->name('development');

Route::get('edukacija',function(){
    return view('education');
})->name('education');

Route::get('usluge',function(){
    return view('services');
})->name('services');

Route::get('it-sektor',function(){
    return view('itsector');
})->name('itsector');
Route::get('zene-it',function(){
    return view('womenit');
})->name('womenit');

Route::get('it-girls',function(){
    return view('girls');
})->name('girls');

Route::get('/', function () {
    return view('welcome');
});

Route::post('snimi','App\Http\Controllers\HomeController@kreirajSubs')->name('kreiraj-Subs');
