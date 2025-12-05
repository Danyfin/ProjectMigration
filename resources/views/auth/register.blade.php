<x-guest-layout>
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="bg-white flex flex-col items-center justify-end gap-4 p-4 w-full max-w-md">
            <h1 class="font-bold text-2xl text-blue-600 mb-6">НАРУШЕНИЙ<span class="text-red-600">.НЕТ</span></h1>
            
            <form method="POST" action="{{ route('register') }}" class="w-full">
                @csrf

                <!-- Login -->
                <div class="mb-4">
                    <x-input-label for="login" :value="__('Login')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="login" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="text" name="login" :value="old('login')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('login')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Lastname -->
                <div class="mb-4">
                    <x-input-label for="lastname" :value="__('Lastname')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="lastname" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="family-name" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="name" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="text" name="name" :value="old('name')" required autocomplete="given-name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Middlename -->
                <div class="mb-4">
                    <x-input-label for="middlename" :value="__('Middlename')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="middlename" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="text" name="middlename" :value="old('middlename')" required autocomplete="additional-name" />
                    <x-input-error :messages="$errors->get('middlename')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Tel -->
                <div class="mb-4">
                    <x-input-label for="tel" :value="__('Phone Number')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="tel" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="tel" name="tel" :value="old('tel')" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('tel')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-gray-600 hover:text-gray-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="inline-block px-5 py-1.5 bg-blue-600 text-white hover:bg-blue-700 border border-blue-600 hover:border-blue-700 rounded-sm text-sm leading-normal font-medium transition-colors duration-200">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </main>
    </div>
</x-guest-layout>