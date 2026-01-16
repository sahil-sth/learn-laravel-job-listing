<h1>{{ $job->title }}</h1>
<p>
    Congratulations, your job is posted!
</p>
<p>
    You can view the job in the <a href="{{ url('/jobs/'.$job->id) }}">website</a>.
</p>