<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Job;
use App\Jobs\TranslateJob;
// test route
Route::get("/test", function(){
    $job = Job::first();
    TranslateJob::dispatch($job);
    return "Done";
});
// static routes
Route::view("/", "home");
Route::view("/contact", "contact");
// Job routes
Route::controller(JobController::class)->group(function(){
    Route::get("/jobs",  "index");
    Route::get("/jobs/create",  "create");
    Route::post("/jobs",  "store")->middleware("auth");
    Route::get('/jobs/{job}',  "show");
    Route::patch('/jobs/{job}',  "update")
        ->middleware("auth")
        ->can("edit", "job");
    Route::delete('/jobs/{job}',  "destroy")
        ->middleware("auth")
        ->can("edit", "job");
    Route::get('/jobs/{job}/edit',  "edit")
        ->middleware("auth");
        // ->can("edit", "job");
});
// for registering the user
Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);
// session controller
Route::get("/login", [SessionController::class, "create"])->name("login");
Route::post("/login", [SessionController::class, "store"]);
Route::post("/logout", [SessionController::class, "destroy"]);