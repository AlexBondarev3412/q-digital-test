<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="w-[255px] text-black text-[32px] font-normal leading-9 mb-5">Login</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <input
                    id="name"
                    placeholder="{{ __('Email') }}"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name="email" value="{{old('email')}}" required
                />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <div class="mt-4">
                    <input
                        id="password"
                        placeholder="{{ __('Password') }}"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        style="-webkit-text-security: disc !important;"
                        name="password" required autocomplete="current-password"
                    />
                </div>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center mt-4">
                <button class="m-2 w-full h-9 bg-sky-600 rounded-[3px] text-center text-white text-xs font-normal uppercase leading-[14px] tracking-wide">
                    {{ __('Login') }}
                </button>
                <a class="m-2 pt-3 w-full h-9 align-middle bg-sky-900 rounded-[3px] text-center text-white text-xs font-normal uppercase leading-[14px] tracking-wide" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
