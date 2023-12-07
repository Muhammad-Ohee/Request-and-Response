<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoResponseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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
Route::get('/binaryFileResponse', [DemoResponseController::class, 'binaryFileResponse']);
Route::get('/downloadFileResponse', [DemoResponseController::class, 'downloadFileResponse']);
Route::get('/cookieResponse', [DemoResponseController::class, 'cookieResponse']);
Route::get('/headerResponse', [DemoResponseController::class, 'headerResponse']);
Route::get('/viewResponse', [DemoResponseController::class, 'viewResponse']);

