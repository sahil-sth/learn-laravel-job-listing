<x-layout>
  <x-slot name="heading">Job Listings</x-slot>
  <div class="space-y-4">
    @foreach ($jobs as $job)
      <a href="/jobs/{{ $job['id'] }}" class="r block px-4 py-6 border border-gray-200 rounded-lg">
        <div class="font-bold text-blue-200 text-sm">{{ $job->employer->name }}</div>
        <div>
          <strong>{{ $job['title'] }}</strong>
          : pays {{ $job['salary'] }}
        </div>
      </a>
    @endforeach
  </div>
</x-layout>
