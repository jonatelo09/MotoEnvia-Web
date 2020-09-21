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

Route::get('/', 'ShippingMethodController@index')->name('inicio');

Route::resource('quotes', 'QuoteController')->only([
  'store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('contact', function(){
    Mail::to("info@motoenvia.com")
        ->bcc(['contacto@motoenvia.com'])
        ->send(new \App\Mail\NewContactEmail(request()->all()));

    return redirect()->route('inicio')->with([
        'contact' => 'success'
    ]);
})->name('contact');
