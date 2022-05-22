<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CustomersReviewsController;
use App\Http\Controllers\InstallQueriesController;
use App\Http\Controllers\ManufacturersController;
use App\Http\Controllers\ShopOwnersController;
use App\Http\Controllers\TechniciansController;
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

Route::prefix('shop-owners')->group( function() {

    Route::post('register', [ShopOwnersController::class, 'register']);

});

Route::prefix('technicians')->group( function() {

    Route::post('register', [TechniciansController::class, 'register']);

    Route::post('login', [TechniciansController::class, 'login']);

});


Route::prefix('manufacturers')->group( function() {

    Route::post('register', [ManufacturersController::class, 'register']);

});

Route::prefix('products')->group( function() {

    Route::post('create', [CustomersController::class, 'create']);

    Route::post('all', [CustomersController::class, 'getProducts']);

    Route::post('all-by-manufacturer', [CustomersController::class, 'getProductsByManufacturer']);

});

Route::prefix('customers')->group( function() {

    Route::post('create', [CustomersController::class, 'create']);

    Route::post('update', [CustomersController::class, 'update']);

    Route::post('delete', [CustomersController::class, 'delete']);

});

Route::prefix('customers-reviews')->group( function() {

    Route::post('create', [CustomersReviewsController::class, 'create']);

});

Route::prefix('install-queries')->group( function() {

    Route::post('create', [InstallQueriesController::class, 'create']);

    Route::post('read', [InstallQueriesController::class, 'read']);

    Route::post('update', [InstallQueriesController::class, 'update']);

    Route::post('delete', [InstallQueriesController::class, 'delete']);
    
});
