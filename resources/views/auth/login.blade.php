<x-guest-layout>
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex flex-col items-center justify-end gap-4 p-4 adow-lg w-full max-w-md">
            <h1 class="font-bold text-2xl text-blue-600 mb-6">НАРУШЕНИЙ<span class="text-red-600">.НЕТ</span></h1>
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-sm" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="w-full">
                @csrf

                <!-- Login -->
                <div class="mb-4">
                    <x-input-label for="login" :value="__('Login')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="login" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]" 
                        type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('login')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full px-3 py-2 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm text-sm focus:border-[#1915014a] focus:outline-none focus:ring-1 focus:ring-[#1915014a]"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-gray-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('register'))
                        <a class="text-sm text-gray-600 hover:text-gray-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('register') }}">
                            {{ __('Create account') }}
                        </a>
                    @endif

                    <button type="submit" class="inline-block px-5 py-1.5 bg-blue-600 text-white hover:bg-blue-700 border border-blue-600 hover:border-blue-700 rounded-sm text-sm leading-normal font-medium transition-colors duration-200">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </main>
    </div>
</x-guest-layout>