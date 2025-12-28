<x-layout>
  <x-slot name="heading">Job</x-slot>
  <h2 class="font-bold text-lg">Job title: {{ $job['title'] }}</h2>
  <p>This job pays: {{ $job['salary'] }}</p>
</x-layout>
