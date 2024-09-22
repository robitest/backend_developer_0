<?php

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', function () {
    return view('frontend/home');
});


// Prices routes
//
//index
Route::get('/prices', function () {

    $prices = Price::all();

    return view('admin.prices.index', [
        'prices' => $prices
    ]);
});
//create
Route::get('/prices/create', function () {
    return view('admin.prices.create');
});
//store
Route::post('/prices', function (Request $request) {
    Price::create($request->all());
});