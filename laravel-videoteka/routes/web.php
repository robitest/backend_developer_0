<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\FormatController;
use Illuminate\Support\Facades\Route;

// // Home routes
// Route::get('/', function () {
//     return view('frontend/home');
// });

// // Dashboard routes
// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// });

Route::resource('', HomeController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('rentals', RentalController::class);
Route::resource('members', UserController::class);
Route::resource('genres', GenreController::class);
Route::resource('movies', MovieController::class);

// Route::controller(PriceController::class)->group(function(){
//     Route::get('/prices', 'index')->name('prices.index');
//     Route::get('/prices/create', 'create')->name('prices.create');
//     Route::post('/prices', 'store')->name('prices.store');
//     Route::get('/prices/{price}', 'show')->name('prices.show');
//     Route::get('/prices/{price}/edit', 'edit')->name('prices.edit');
//     Route::put('/prices/{price}', 'update')->name('prices.update');
//     Route::delete('/prices/{price}', 'destroy')->name('prices.destroy');
// });
Route::resource('prices', PriceController::class);
Route::resource('formats', FormatController::class);
