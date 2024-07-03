<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../assets/js/init-alpine.js"></script>
    <style>
        .animated-bg {
            background: linear-gradient(-45deg, #ffffff, #0003a0, #a10000, #00bd3f);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body class="animated-bg">
    <x-guest-layout>
        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900 bg-opacity-60">
                <div
                    class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
                    <div class="flex flex-col overflow-y-auto md:flex-row">
                        <div class="h-32 md:h-auto md:w-1/2">
                            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                                src="https://img.freepik.com/foto-gratis/configuracion-juegos-angulo-alto-interiores_23-2149829123.jpg?w=1380&t=st=1719997782~exp=1719998382~hmac=c17b12bc42569015d65c526c5e8d7fe1d83114bfddff70e4b27f370949968797" alt="Office" />
                            <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                                src="../assets/img/login-office-dark.jpeg" alt="Office" />
                        </div>
                        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                            <div class="w-full">
                                <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                    Login
                                </h1>

                                <!-- Validation Errors -->
                                <x-validation-errors class="mb-4" />

                                <!-- Session Status -->
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                                        <input id="email"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            type="email" name="email" :value="old('email')" required autofocus
                                            autocomplete="username" />
                                    </label>
                                    <label class="block mt-4 text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Password</span>
                                        <input id="password"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            type="password" name="password" required autocomplete="current-password" />
                                    </label>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <input id="remember_me" type="checkbox" name="remember"
                                                class="form-checkbox" />
                                            <span
                                                class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <button
                                            class="ml-4 block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                            type="submit">
                                            {{ __('Log in') }}
                                        </button>
                                    </div>
                                </form>

                                <hr class="my-8" />

                                <p type="submit" class="mt-1">
                                    <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                        href="{{ route('register') }}">
                                        Create account
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </x-guest-layout>
</body>

</html>
