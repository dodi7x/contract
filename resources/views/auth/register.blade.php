
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js')  }}" defer></script>
    
    <title>Document</title>
</head>
<body>
    <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}"  x-data="{role_id: 2}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

 <!-- select Option Rol type -->
              <div class="mt-4">
                <x-label   value="{{ __('Register as:') }}" />
                <select name="role_id"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="Lawyer">Lawyer</option>
                <option value="user">user</option>
                <option value="user2">user2</option>
                </select>
             <!-- address -->
             <div class="mt-4">
                <x-label for="address" :value="__('address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required  />
            </div>

              <!-- phone -->
              <div class="mt-4">
                <x-label for="phone" :value="__('phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required  />
            </div>
            <div class="mt-4">
                <x-label for="gender" :value="__('gender')"/>

                <x-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required  />
            </div>
            <div class="mt-4">
                <x-label for="the age" :value="__('the age')"/>

                <x-input id="the_age" class="block mt-1 w-full" type="text" name="the_age" :value="old('the_age')" required  />
            </div>
        </div>
        
      
       
   

              
                            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</body>
</html>


