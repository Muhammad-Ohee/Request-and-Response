<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoResponseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', [DemoController::class, 'demoAction']);
Route::get('/urlRequest/{name}/{age}', [DemoController::class, 'urlRequest']);
Route::get('/jsonRequest', [DemoController::class, 'jsonRequest']);
Route::get('/headerRequest', [DemoController::class, 'headerRequest']);
Route::get('/queryRequest', [DemoController::class, 'queryRequest']);
Route::get('/headerbodyparamRequest', [DemoController::class, 'headerbodyparamRequest']);
Route::post('/formRequest', [DemoController::class, 'formRequest']);
Route::post('/fileRequest', [DemoController::class, 'fileRequest']);
Route::post('/fileUploadRequest', [DemoController::class, 'fileUploadRequest']);
Route::get('/ipRequest', [DemoController::class, 'ipRequest']);
Route::get('/acceptRequest', [DemoController::class, 'acceptRequest']);
Route::post('/cookieRequest', [DemoController::class, 'cookieRequest']);




Route::get('/demoAction', [DemoResponseController::class, 'demoAction']);
Route::get('/jsonResponse', [DemoResponseController::class, 'jsonResponse']);
Route::get('/response1', [DemoResponseController::class, 'redirectResponse1']);
Route::get('/response2', [DemoResponseController::class, 'redirectResponse2']);
Route::get('/binaryFileResponse', [DemoResponseController::class, 'binaryFileResponse']);
Route::get('/downloadFileResponse', [DemoResponseController::class, 'downloadFileResponse']);
Route::get('/cookieResponse', [DemoResponseController::class, 'cookieResponse']);
Route::get('/headerResponse', [DemoResponseController::class, 'headerResponse']);
Route::get('/viewResponse', [DemoResponseController::class, 'viewResponse']);
