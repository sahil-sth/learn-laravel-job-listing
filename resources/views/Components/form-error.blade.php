@props(["name"])
@error($name)
    <p class="mt-4 text-xs font-semibold text-red-500">{{ $message }}</p>
@enderror