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
Route::resource('section-menu',SectionMenuController::class,['except'=>'create']);
Route::resource('article',ArticleController::class);
Route::resource('slogan',SloganController::class,['except'=>['show']]);
Route::resource('section',SectionController::class,['except'=>'create']);
Route::Resource('galerie',GalerieController::class,['except'=>['show','edit','update']]);
Route::Resource('info_complementaire',InfoComplementaireController::class,['only'=>['edit','update']]);



// route des elements du menu
Route::get('menu/{id}/section','MenuController@section')->name('section-menu');
Route::get('section-menu/{id}/create','SectionMenuController@nouvelle_section')->name('section-menu-create');


// route pour les articles
Route::get('article/{id}/section','ArticleController@section')->name('section');
Route::get('section/{id}/create','SectionController@nouvelle_section')->name('section_create');

//status des articles
Route::get('article/{id}/action','ArticleController@status')->name('status_article');

Route::get('mot_directeur/{info_complementaire}/edit','InfoComplementaireController@mot_directeur')->name('mot_directeur');
Route::put('mot_directeur/{info_complementaire}/edit','InfoComplementaireController@mot_directeur_update')->name('mot_directeur');

Route::get('image_principale/{info_complementaire}/edit','InfoComplementaireController@image_principale')->name('image_principale');
Route::put('image_principale/{info_complementaire}/edit','InfoComplementaireController@image_principale_update')->name('image_principale');



// route pour le frontend 
Route::get('menu/{id}/show','Frontend\HomeController@menuShow')->name('menu_show');