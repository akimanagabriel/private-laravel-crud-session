<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// book routes
Route::get("/book", [BookController::class, "index"]);
Route::get("/showform", [BookController::class, "create"]);
Route::post("/createbook", [BookController::class, "store"]);