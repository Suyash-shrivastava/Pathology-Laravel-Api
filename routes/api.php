<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/test',function(){
//    return response()->json('helloSuyash');
//    });

Route::get('patientdata',[FormController::class,'index']);
Route::post('patientdata',[FormController::class,'store']);