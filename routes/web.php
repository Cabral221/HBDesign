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

Route::get('/', 'UserController@index')->name('welcome');
Route::get('/products/{product:slug}', 'UserController@show')->name('product.show');
Route::post('/commande/{product:slug}', 'UserController@commande')->name('commande');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/commandes/all', 'HomeController@all')->name('commande.all');
Route::get('/commandes/noready', 'HomeController@noready')->name('commande.noready');
Route::get('/commandes/ready', 'HomeController@ready')->name('commande.ready');
Route::get('/commandes/deleted', 'HomeController@deleted')->name('commande.deleted');

Route::get('/commandes/show/{id}', 'ProductController@show')->name('admin.product.show');
Route::get('/commandes/show/{id}/valide', 'ProductController@handleReady')->name('admin.product.handleready');
Route::get('/commandes/show/{id}/deleted', 'ProductController@handleDeleted')->name('admin.product.handledeleted');