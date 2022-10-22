<?php

use App\Http\Controllers\api\TestController;
use App\Models\Category;
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

Route::get('/test/category', function(){
    $categories = Category::all();
    return response()->json($categories);
});

Route::get('/test/index', [TestController::class, 'index']);


// Route::get('/test/category', [TestController::class]);
