<?php

use App\Http\Controllers\InstagramController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\TestData;

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

Route::get('/', [\App\Http\Controllers\BaseAppController::class, 'install']);

//Route::get('/install', [InstagramController::class, 'authInstagram']);

//Route::get('/auth', [InstagramController::class, 'redirectInstagram']);
