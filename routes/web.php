<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
// static routes
Route::view("/", "home");
Route::view("/contact", "contact");
// Job routes
Route::controller(JobController::class)->group(function(){
    Route::get("/jobs",  "index");
    Route::get("/jobs/create",  "create");
    Route::post("/jobs",  "store");
    Route::get('/jobs/{job}',  "show");
    Route::patch('/jobs/{job}',  "update");
    Route::delete('/jobs/{job}',  "destroy");
    Route::get('/jobs/{job}/edit',  "edit");
});
// for registering the user
Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);
// session controller
Route::get("/login", [SessionController::class, "create"])->name("login");
Route::post("/login", [SessionController::class, "store"]);
Route::post("/logout", [SessionController::class, "destroy"]);