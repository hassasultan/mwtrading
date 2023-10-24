<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendApiController;


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
Route::get('/home',[FrontendApiController::class,'home']);
Route::get('/category-listing',[FrontendApiController::class,'category']);
Route::get('/category-details',[FrontendApiController::class,'categoryDetail']);
Route::get('/subcategory-listing',[FrontendApiController::class,'subcategory']);
Route::get('/section-listing',[FrontendApiController::class,'sections']);
Route::get('/section-details',[FrontendApiController::class,'sectionDetail']);
Route::get('/products-listing',[FrontendApiController::class,'products']);
Route::get('/products-details',[FrontendApiController::class,'details']);
