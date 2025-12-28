<x-layout>
  <x-slot>Job</x-slot>
  <h2 class="font-bold text-lg">Job title: {{ $job['title'] }}</h2>
  <p>This job pays: {{ $job['salary'] }}</p>
</x-layout>
