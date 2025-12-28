<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view("home");
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => Job::all()
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Job::all(), fn($job) => $job['id']===(int)$id);
    return view("job", ["job" => $job]);
});