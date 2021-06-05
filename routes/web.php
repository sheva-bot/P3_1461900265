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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index0265');
});
Route::get('/barang', function () {
    return view('barang0265');
});
Route::get('/pelanggan', function () {
    return view('pelanggan0265');
});
Route::get('/transaksi', function () {
    return view('transaksi06265');
});
Route::get('/user', function () {
    return view('user0265');
});
