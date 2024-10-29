<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/upload', function (Request $request)  {
    if ($request->hasFile('photo')) {
        echo 'organic';
        return;
    }

    echo 'ga kedetek memek'; 
    return;
});
