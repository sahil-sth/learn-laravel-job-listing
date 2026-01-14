<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{ 
    // shows all the jobs
    public function index(){
        $jobs = Job::with("employer")->latest()->paginate(3);
        return view('jobs.index', ["jobs"=>$jobs]);
    }
    // shows the create job page
    public function create(){
        return view("jobs.create");
    }
    // actually receives a request to create a new job
    public function store(){
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
    }
    // shows the specific job
    public function show($id){
        $job = Job::find($id);
        return view("jobs.show", ["job" => $job]);
    }
    // shows the edit job page
    public function edit($id){
        $job = Job::findOrFail($id);
        Gate::authorize("edit-job", $job);
        return view("jobs.edit", ["job" => $job]);
    }
    // actually edits the job
    public function update($id){
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

        // Redirect to job specific page
        return redirect($redirectUrl);

    }

    public function destroy($id){
        // authorize TODO

        // find the job by id
        $job = Job::findOrFail($id);

        // delete the job 
        $job->delete();

        // redirect
        return redirect("/jobs");

    }
}
