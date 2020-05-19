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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProductController@index');


Route::get('/prodotti', function() {
    return view('products');
})->name('prodotti');

Route::get('/contatti', function() {
    return view('contacts');
})->name('contatti');

// ADMIN
Route::get('admin/products', function() {
    return view('admin.products');
})->name('admin.prodotti');

Route::get('/prodotti/{id}', function($id) {
    return view('prodotto', compact('id'));
})->name('prodotti.show');
