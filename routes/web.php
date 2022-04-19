<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OAuthController;

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

Route::get('/dashboard', function (Request $request) {
    return view('dashboard', [
        'clients' => $request->user()->clients,
    ]);
})->middleware(['auth'])->name('dashboard');

// Route::get('/redirect',  [OAuthController::class, 'redirect']);
// Route::get('/callback',  [OAuthController::class, 'callback']);

require __DIR__.'/auth.php';
