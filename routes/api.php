<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('usuario')->group(function () {
    Route::post('/login', 'Api\AuthController@login');

});
Route::group(['middleware' => 'api.auth'], function () {
    //rotas dos corredores
    Route::prefix('corredores')->group(function () {
        Route::get('/',        'Api\CorredoresController@table');
        Route::post('/',       'Api\CorredoresController@store');
        Route::get('/{id}',    'Api\CorredoresController@show');
        Route::patch('/{id}',  'Api\CorredoresController@update');
        Route::delete('/{id}', 'Api\CorredoresController@destroy');
    });
    //rotas das provas
    Route::prefix('provas')->group(function () {
        Route::get('/',        'Api\ProvasController@table');
        Route::post('/',       'Api\ProvasController@store');
        Route::get('/{id}',    'Api\ProvasController@show');
        Route::patch('/{id}',  'Api\ProvasController@update');
        Route::delete('/{id}', 'Api\ProvasController@destroy');
    });
    //rotas das corredores provas
    Route::prefix('corredor-provas')->group(function () {
        //rotas das corredores provas
        Route::get('/',        'Api\CorredorProvasController@table');
        Route::post('/',       'Api\CorredorProvasController@store');
        Route::get('/{id}',    'Api\CorredorProvasController@show');
        Route::patch('/{id}',  'Api\CorredorProvasController@update');
        Route::delete('/{id}', 'Api\CorredorProvasController@destroy');

        //rotas das corredores resultados
        Route::prefix('{corredor_prova_id}/resultados')->group(function () {
            Route::get('/',        'Api\CorredorResultadosController@table');
            Route::post('/',       'Api\CorredorResultadosController@store');
            Route::get('/{id}',    'Api\CorredorResultadosController@show');
            Route::patch('/{id}',  'Api\CorredorResultadosController@update');
            Route::delete('/{id}', 'Api\CorredorResultadosController@destroy');
        });
    });
    Route::prefix('corredor-resultados')->group(function () {
        Route::get('/ranking',        'Api\CorredorResultadosController@rankingResultados');
        Route::get('/ranking/idade',  'Api\CorredorResultadosController@rankingResultadosIdade');
    });

});
