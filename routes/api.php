<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\WordsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('words', 'WordsController@index');
Route::get('words/find_id/{id}', 'WordsController@find_by_id');
Route::get('words/find_word/{word}', 'WordsController@find_by_word');
Route::get('words/find_meaning/{meaning}', 'WordsController@find_by_meaning');
Route::get('words/find_level/{level}', 'WordsController@find_by_level');
