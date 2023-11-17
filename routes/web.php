<?php

use App\Http\Controllers\AcController;
use App\Http\Controllers\tvController;
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
    return redirect("/home");
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/ac/all', [AcController::class, 'index']);
Route::get('/ac/detail/{ac}', [acController::class, 'show']);

Route::get('/tv/all', [tvController::class, 'index']);
Route::get('/tv/detail/{tv}', [tvController::class, 'show']);
