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


Route::get('videos', 'VideosController@index');
Route::get('videos/find_id/{id}', 'VideosController@find_by_id');
Route::get('videos/find_channel/{channel}', 'VideosController@find_by_channel');
Route::get('videos/find_keterangan/{keterangan}', 'VideosController@find_by_keterangan');
Route::get('videos/find_path/{path}', 'VideosController@find_by_path');

Route::get('ebooks', 'EbooksController@index');
Route::get('ebooks/find_id/{id}', 'EbooksController@find_by_id');
Route::get('ebooks/find_title/{title}', 'EbooksController@find_by_title');
Route::get('ebooks/find_keterangan/{keterangan}', 'EbooksController@find_by_keterangan');
Route::get('ebooks/find_path/{path}', 'EbooksController@find_by_path');