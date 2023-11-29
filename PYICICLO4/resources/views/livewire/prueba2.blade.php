<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="flex responsive flex-row md:flex-col">

        <div class="w-1/5 h-16 aspect-square absolute bg-sky-900">
            <div class="w-4 h-4 left-0 top-0 bg-yellow-400"></div>

            <a href="{{ url('/') }}">
                <div class="flex items-center justify-center">
                    <img class="w-40 h-15 mt-8 absolute" src="{{ asset('storage/images/Logo_upeu.png') }}" />
                    <div class="w-40 h-0 mt-20 absolute border-4 border-yellow-400 hover:border-yellow-500"></div>
                </div>
            </a>
        </div>

        <div class=" flex w-4/5 h-16 aspect-square bg-gray-200 lg:ml-auto">

            <div class="absolute">
                <a href="{{ url('/') }}">
                    <div class="mt-3 ml-8 text-sky-900 text-3xl font-bold font-['Inter']">Inicio</div>
                    <div class="w-20 h-0 ml-8  border-4 border-yellow-400 hover:border-yellow-500"></div>
                </a>
            </div>

            @if (Route::has('login'))
                <div class="ml-auto mr-8 mt-5">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth

            @endif
        </div>
    </div>

    </nav>
</body>
</html>
