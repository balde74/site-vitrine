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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('menu',MenuController::class);
Route::resource('section-menu',SectionMenuController::class);
Route::get('menu/{id}/section','MenuController@section')->name('section-menu');
Route::get('section/{id}/create','SectionMenuController@nouvelle_section')->name('section-menu-create');


//nouvelle section
// Route::get('section/{id}/create','SectionController@nouvelle_section')->name('nouvelle_section');

