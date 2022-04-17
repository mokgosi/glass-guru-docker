<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QRCodeController;
use App\Http\Controllers\Api\QuoteController;
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

// Route::group(['prefix' => 'auth'], function () {
//      Route::post('login', 'Auth\AuthController@login')->name('login');
//      Route::post('register', 'Auth\AuthController@register');
//      Route::group(['middleware' => 'auth:api'], function() {
//           Route::get('logout', 'Auth\AuthController@logout');
//           Route::get('user', 'Auth\AuthController@user');
//    });
// });

// Route::group(['prefix' => 'v1'], function () {
//     Route::group(['middleware' => 'auth:api'], function() {
//         Route::post('upload-qrcode-file', [QRCodeController::class, 'qrCodeUploader']);
//         Route::get('unsupported-vehicle-makes', [QRCodeController::class, 'checkIfVehicleMakeSupported']);
//         Route::get('license-expired', [QRCodeController::class, 'checkIfLicenseExpired']);
//         Route::get('get-vehicle-details', [QRCodeController::class, 'getAddionalVehicleDetails']);
//     });
// });

Route::post('upload-qrcode-file', [QRCodeController::class, 'qrCodeUploader']);
Route::post('confirm-quote', [QuoteController::class, 'confirmQuote']);