@extends('layouts.auth')

@section('content')
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div
            class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
        >
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img
                        aria-hidden="true"
                        class="object-cover w-full h-full dark:hidden"
                        src="{{ asset('auths/img/login-office.jpeg') }}"
                        alt="Office"
                    />
                    <img
                        aria-hidden="true"
                        class="hidden object-cover w-full h-full dark:block"
                        src="{{ asset('auths/img/login-office-dark.jpeg') }}"
                        alt="Office"
                    />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1
                            class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                        >
                            {{ __('Login') }}
                        </h1>

                        <x-form method="POST" action="{{ route('login') }}">
                            <x-input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                label="{{ __('Email') }}"
                                placeholder="johndoe@gmail.com"
                                name="email"
                                id="email"
                                model="email"
                                type="email"
                                required
                            ></x-input>

                            <x-input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                label="{{ __('Password') }}"
                                placeholder="********"
                                name="password"
                                id="password"
                                model="password"
                                type="password"
                                required
                            ></x-input>

                            <div class="mt-3">
                                <x-input.checkbox
                                    label="{{ __('Remember me') }}"
                                    id="remember"
                                    name="remember"
                                    model="remember"
                                ></x-input.checkbox>
                            </div>

                            <x-input
                                name="g_form_name"
                                model="g_form_name"
                                value="login"
                                hidden
                            ></x-input>

                            {!! RecaptchaV3::field('login') !!}

                            <x-button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Login') }}</x-button>
                        </x-form>

                        <hr class="my-8" />

                        <a href="{{ route('github.redirect') }}" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                            <svg
                                class="w-4 h-4 mr-2"
                                aria-hidden="true"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                                />
                            </svg>
                            {{ __('Github') }}
                        </a>

                        <p class="mt-4">
                            <x-link
                                class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                to="{{ route('password.request') }}"
                            >{{ __('Forgot your password?') }}</x-link>
                        </p>
                        <p class="mt-1">
                            <x-link
                                class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                to="{{ route('register') }}"
                            >{{ __('Create account') }}</x-link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
