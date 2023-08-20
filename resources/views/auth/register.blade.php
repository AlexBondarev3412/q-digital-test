<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="w-[255px] text-black text-[32px] font-normal leading-9 mb-5">Registration</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <input
                    id="name"
                    placeholder="{{ __('Name') }}"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name="name" value="{{old('name')}}" required autofocus
                />
            </div>

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
                <input
                    id="password"
                    placeholder="{{ __('Password') }}"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    style="-webkit-text-security: disc !important;"
                    name="password" required autocomplete="new-password"
                />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <input
                    id="password_confirmation"
                    placeholder="{{ __('Password Confirmation') }}"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    style="-webkit-text-security: disc !important;"
                    name="password_confirmation" required autocomplete="new-password"
                />
            </div>

            <div class="flex flex-col items-center mt-4">

                <button class="m-2 w-full h-9 bg-sky-600 rounded-[3px] text-center text-white text-xs font-normal uppercase leading-[14px] tracking-wide">
                    {{ __('Submit') }}
                </button>
                <a class="m-2 pt-3 w-full h-9 align-middle bg-sky-900 rounded-[3px] text-center text-white text-xs font-normal uppercase leading-[14px] tracking-wide" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
