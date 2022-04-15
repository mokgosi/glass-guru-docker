<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QRCodeController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['prefix' => 'auth'], function () {
//      Route::post('login', 'Auth\AuthController@login')->name('login');
//      Route::post('register', 'Auth\AuthController@register');
//      Route::group(['middleware' => 'auth:api'], function() {
//           Route::get('logout', 'Auth\AuthController@logout');
//           Route::get('user', 'Auth\AuthController@user');
//    });
// });


Route::post('upload-qrcode-file', [QRCodeController::class, 'qrCodeUploader']);
Route::post('decode-qrcode-file', [QRCodeController::class, 'qrCodeReader']);

