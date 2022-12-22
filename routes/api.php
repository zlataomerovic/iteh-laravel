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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/companies', [\App\Http\Controllers\CompanyController::class, 'index']);
Route::resource('/companies',\App\Http\Controllers\CompanyController::class)->only(['index','show']);
Route::resource('/applicants',\App\Http\Controllers\ApplicantController::class)->only(['index','show']);
Route::apiResource('/applications',\App\Http\Controllers\JobApplicationController::class);
Route::apiResource('/joboffers',\App\Http\Controllers\JobOfferController::class);
