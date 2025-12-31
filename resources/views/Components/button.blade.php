<a
  {{ $attributes->merge(['class' => 'rounded-md bg-indigo-500 px-4 py-2 text-sm cursor-pointer font-semibold text-white  hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900']) }}
>
  {{ $slot }}
</a>
