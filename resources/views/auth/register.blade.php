<x-layout>
  <x-slot name="heading">Register User</x-slot>

  <form method="POST" action="/register">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Enter your information:</h2>
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- First Name -->
            <x-form-field>
            <x-form-label for="first_name">First Name</x-form-label>

            <div class="mt-2">
                <x-form-input name="first_name" id="first_name" required/>
            </div>
            <x-form-error name="first_name"/>
            </x-form-field>

            <!-- Last Name -->
            <x-form-field>
                <x-form-label for="last_name">Last Name</x-form-label>
                <div class="mt-2">
                    <x-form-input   
                        id="last_name"
                        name="last_name"
                        required/>
                </div>
                <x-form-error name="last_name"/>
            </x-form-field>

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

            <!-- Password Confirmation -->
            <x-form-field>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <div class="mt-2">
                    <x-form-input   
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password_confirmation"
                        required/>
                </div>
                <x-form-error name="password_confirmation"/>
            </x-form-field>
        </div>
      </div>
    </div>
    <!-- Actions -->
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm/6 font-semibold text-white">Cancel</a>
      <x-form-button>Register</x-form-button>
    </div>
  </form>
</x-layout>
