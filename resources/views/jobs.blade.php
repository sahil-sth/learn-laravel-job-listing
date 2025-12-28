<x-layout>
  <x-slot name="heading">Job Listings</x-slot>
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="jobs/{{ $job['id'] }}" class="text-blue-300 underline">
          {{ $job['title'] }}: pays {{ $job['salary'] }}
        </a>
      </li>
    @endforeach
  </ul>
</x-layout>
