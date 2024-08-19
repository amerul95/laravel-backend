<?php

use App\Http\Controllers\API\V1\ArticleController;
use App\Http\Controllers\API\V1\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

Route::group(['prefix' => 'v1','middleware' =>'auth:sanctum'], function(){
    // article
    Route::apiResource('/articles',ArticleController::class);

    // author
    Route::get('/authors/{user}',[AuthorController::class,'show'])->name('author');
});
