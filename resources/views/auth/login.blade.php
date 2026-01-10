<x-layout>
  <x-slot name="heading">Login</x-slot>

  <form method="POST" action="/login">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Enter your information:</h2>
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- Email -->
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                    <x-form-input   
                        id="email"
                        name="email"
                        type="email"
                        required/>
                </div>
                <x-form-error name="email"/>
            </x-form-field>
            
            <!-- Password -->
            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                    <x-form-input   
                        id="password"
                        name="password"
                        type="password"
                        required/>
                </div>
                <x-form-error name="password"/>
            </x-form-field>

            
        </div>
      </div>
    </div>
    <!-- Actions -->
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm/6 font-semibold text-white">Cancel</a>
      <x-form-button>Login</x-form-button>
    </div>
  </form>
</x-layout>
