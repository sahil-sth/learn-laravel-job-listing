<x-layout>
  <x-slot name="heading">Create Job</x-slot>

  <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Enter the job information:</h2>

        <p class="mt-1 text-sm/6 text-gray-400">We just need a handful of information from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <!-- Title -->
          <x-form-field>
            <x-form-label for="title">Title</x-form-label>

            <div class="mt-2">
              <x-form-input placeholder="CEO" name="title" id="title" required/>
            </div>
            <x-form-error name="title"/>
          </x-form-field>

          <!-- Salary -->
          <x-form-field>
            <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>

            <div class="mt-2">
              <div
                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500"
              >
                
              </div>
              <x-form-input   
                  id="salary"
                  type="text"
                  name="salary"
                  placeholder="$50,000"
                  required/>
            </div>
            @error('salary')
              <p class="mt-4 text-xs font-semibold text-red-500">{{ $message }}</p>
            @enderror
          </x-form-field>
        </div>
      </div>
    </div>
    <!-- Actions -->
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
      <x-form-button>Save</x-form-button>
    </div>
  </form>
</x-layout>
