<x-layout>
  <x-slot name="heading">Job</x-slot>
  <h2 class="font-bold text-lg">Job title: {{ $job->title }}</h2>
  <p>This job pays: {{ $job->salary }}</p>
  @can('edit-job', $job)
  <p class="mt-4">
    <x-button href="/jobs/{{ $job->id }}/edit">Edit a job</x-button>
  </p>
  @endcan
</x-layout>
