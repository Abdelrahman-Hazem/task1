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

Route::apiResource('ads', "App\Http\Controllers\Api\AdController");

Route::apiResource('tags', "App\Http\Controllers\Api\TagController");

Route::apiResource('categories','App\Http\Controllers\Api\CategoryController');

Route::get('advertiser-ads','App\Http\Controllers\Api\AdvertiserController@advertiserAds');

