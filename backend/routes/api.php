<?php

use App\Recipe;
use Illuminate\Http\Request;

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

Route::get('/public', function (Request $request) {
    return response()->json(["message" => "This content it is totaly public "]);
});

Route::get('/private', function (Request $request) {
    return response()->json(Recipe::all());
})->middleware('jwt');

Route::get('/private-scoped', function (Request $request) {
    return response()->json([
        "message" => "GOOOOOOOOOOOOOOOOOODDD"
    ]);
})->middleware('check.scope:read:messages');
