<?php

use App\Http\Controllers\JobController;
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

Route::resource("jobs", JobController::class); // automatically creates what we have up 