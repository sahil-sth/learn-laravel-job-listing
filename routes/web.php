<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
// static routes
Route::view("/", "home");
Route::view("/contact", "contact");
// Job routes
// Route::controller(JobController::class)->group(function(){
//     Route::get("/jobs",  "index");
//     Route::get("/jobs/create",  "create");
//     Route::post("/jobs",  "store");
//     Route::get('/jobs/{id}',  "show");
//     Route::patch('/jobs/{id}',  "update");
//     Route::delete('/jobs/{id}',  "destroy");
//     Route::get('/jobs/{id}/edit',  "edit");
// });
// for jobs
Route::resource("jobs", JobController::class); // automatically creates what we have up 
// for registering the user
Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);
// session controller
Route::get("/login", [SessionController::class, "create"]);
Route::post("/login", [SessionController::class, "store"]);