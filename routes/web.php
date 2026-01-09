<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
// static routes
Route::view("/", "home");
Route::view("/contact", "contact");
// Job routes
Route::get("/jobs", [JobController::class, "index"]);
Route::get("/jobs/create", [JobController::class, "create"]);
Route::post("/jobs", [JobController::class, "store"]);
Route::get('/jobs/{id}', [JobController::class, "show"]);
Route::patch('/jobs/{id}', [JobController::class, "update"]);
Route::delete('/jobs/{id}', [JobController::class, "destroy"]);
Route::get('/jobs/{id}/edit', [JobController::class, "edit"]);