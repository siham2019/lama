<?php

use App\Models\Actor;
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

Route::get('/', 'App\Http\Controllers\SerieController@index');
Route::get('/serie/{serie}', 'App\Http\Controllers\SerieController@show')->name('serie');
Route::get('/serie/{serie}/episode/{episode}', 'App\Http\Controllers\EpisodeController@show')->name('episode');
Route::get('/episode/latest', 'App\Http\Controllers\EpisodeController@showLatest')->name('episodeLatest');
Route::get('/login', 'App\Http\Controllers\AuthController@show');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::group(['middleware'=>'auth'],function () {
    
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

    Route::prefix('admin')->group(function () {


        Route::get('/series', 'App\Http\Controllers\Dashboard@show')->name('dashboard');
        Route::get('/actors', 'App\Http\Controllers\Dashboard@showOActors');


        Route::prefix('actor')->group(function () {
            
             Route::get('/add',function(){
                 return view('admin.actors.add');
             });

             Route::post('/add','App\Http\Controllers\Dashboard@addOActor');

             Route::get('{actor}/update', function ($actor) {

                return view('admin.actors.update',['actor'=>Actor::find($actor)]);

             });

             Route::post('{actor}/update', 'App\Http\Controllers\Dashboard@updateOActor');
            Route::post('/{id}/remove', 'App\Http\Controllers\Dashboard@removeOActor');
        });


         Route::prefix('serie')->group(function () {

            Route::get('/add', 'App\Http\Controllers\Dashboard@addSerie');
            Route::post('/add','App\Http\Controllers\Dashboard@addS')->name('addSerie');
            Route::get('/{id}/update', 'App\Http\Controllers\Dashboard@updateSerie');
            Route::post('/{id}/update', 'App\Http\Controllers\Dashboard@updateS')->name('updateSerie');
            Route::post('/remove', 'App\Http\Controllers\Dashboard@removeS');
            Route::get('/{id}/episodes', 'App\Http\Controllers\Dashboard@showEpisode');
            Route::get('/{id}/actor/add', 'App\Http\Controllers\Dashboard@addActors');
            Route::post('/{id}/actor/add', 'App\Http\Controllers\Dashboard@addActor')->name('addActor');

            Route::get('/{id}/episode/add', function ($id) {
                  return view('admin.episode.addEpisode',['id'=>$id]);
            });
             Route::post('/episode/add', 'App\Http\Controllers\Dashboard@addEpisode')->name('addEpisode');
             
             Route::get('/{id}/actors','App\Http\Controllers\Dashboard@showActors');
             Route::post('{id}/actor/{ac}/remove', 'App\Http\Controllers\Dashboard@removeActors');
         });

         Route::get('/episode/{id}/update', 'App\Http\Controllers\Dashboard@updateEpisode');
         Route::post('/episode/{id}/update', 'App\Http\Controllers\Dashboard@updateE')->name('updateEpisode');
         Route::post('/episode/remove', 'App\Http\Controllers\Dashboard@removeEpisode');
      


    });



});