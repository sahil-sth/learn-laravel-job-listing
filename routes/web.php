<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view("home");
});

Route::get('/jobs', function () {
   $jobs = Job::with("employer")->latest()->paginate(3);
    return view('jobs.index', ["jobs"=>$jobs]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get("/jobs/create", function(){
    return view("jobs.create");
});

Route::post("/jobs", function(){
    request()->validate([
        "title" => ["required", "min:3"], 
        "salary" => ["required"]
    ]);
    Job::create([
        "title" => request("title"), 
        "salary" => request("salary"), 
        "employer_id" => 1
    ]);

    return redirect("/jobs");
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view("jobs.show", ["job" => $job]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
   // Validate the user request
   request()->validate([
        "title" => ["required", "min:3"], 
        "salary" => ["required"]
   ]);

   // Check Authorization: TODO
   // find the record
   $job = Job::findOrFail($id);

   // Update record and persist
   $job->update([
    "title"=> request("title"),
    "salary"=>request("salary")
   ]);
   $redirectUrl = "/jobs/" . $job->id;
   Log::debug('UPDATE ROUTE HIT', [
    'method' => request()->method(),
    'path'   => request()->path(),
    'id'     => $id,
    'redirectUrl' => $redirectUrl
    ]);
   // Redirect to job specific page
   return redirect($redirectUrl);
});

// Delete
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view("jobs.show", ["job" => $job]);
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view("jobs.edit", ["job" => $job]);
});