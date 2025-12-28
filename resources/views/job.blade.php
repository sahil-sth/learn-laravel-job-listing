<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="font-bold text-lg">Job title: {{$job['title']}}</h2>
    <p>This job pays: {{$job['salary']}}</p>
</x-layout>