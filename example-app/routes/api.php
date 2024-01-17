<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('Yevhenii_Savratskyi/313679/people', [PeopleController::class,'index']);
Route::get('Yevhenii_Savratskyi/313679/person/{id}', [PeopleController::class,'show']);
Route::apiResource('Yevhenii_Savratskyi/313679/people', PeopleController::class);
