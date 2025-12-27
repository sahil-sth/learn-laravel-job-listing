<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}: pays {{ $job['salary']}}</strong></li>
    @endforeach
</x-layout>