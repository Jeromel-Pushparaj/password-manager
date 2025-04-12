<x-guest-layout>
    <div class="p-8 mx-auto max-w-md">
        <div class="p-6 bg-gray-600 bg-opacity-30 rounded-2xl shadow-xl backdrop-blur-lg">
            <h2 class="mb-6 text-2xl font-bold text-center text-white">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email"
                        class="p-2 w-full bg-transparent rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input id="password"
                        class="p-2 w-full bg-transparent rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="text-indigo-600 rounded border-gray-300 shadow-sm focus:ring-indigo-500">
                    <label for="remember_me" class="ml-2 text-sm text-gray-200">Remember me</label>
                </div>

                <!-- Forgot Password & Submit -->
                <div class="flex flex-col gap-3 justify-between items-center sm:flex-row">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif

                    <x-primary-button class="py-2 px-4 w-full bg-blue-500 sm:w-auto hover:bg-blue-600">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
