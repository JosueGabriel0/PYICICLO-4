<div class="flex h-screen">
    <script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>

    <!--Nav vertical-->
    <div class="flex flex-col w-1/5 bg-slate-400">
        <div class="h-full bg-sky-900 border-r-4 border-r-yellow-400">

            <!-- Contenido -->
            <div class="flex-col">
                <div class="flex justify-between">
                    <div class="w-4 h-4 bg-yellow-400"></div>
                    <img class="w-40 h-15 ml-14  absolute" src="{{ asset('storage/images/Logo_upeu.png') }}" />
                </div>

                <div class="text-neutral-400 text-xl font-bold font-['Inter'] ml-4 mt-20">Principal</div>

                <!--Rutas-->
                <div>

                    <div class="flex justify-between">
                        <a href="/inicio" class="ml-3 mt-4"><i class="fa-solid fa-house fa-2x"
                                style="color: #ffffff;"></i></a>
                        <a href="/inicio">
                            <p
                                class="text-white border-b-4 border-b-yellow-400 hover:border-b-yellow-50 text-lg font-bold font-['Inter'] mr-40 mt-5">
                                Inicio</p>
                        </a>
                    </div>

                    <div class="flex justify-between">
                        <a href="/inicio" class="ml-4 mt-8"><i class="fa-solid fa-file fa-2x"
                                style="color: #ffffff;"></i></a>
                        <a href="/inicio">
                            <p
                                class="text-white border-b-4 border-b-yellow-400 hover:border-b-yellow-50 text-lg font-bold font-['Inter'] ml-4 mr-4 mt-5">
                                Modulo de propuestas de convocatoria</p>
                        </a>
                    </div>



                    <div class="flex justify-between">
                        <a href="/inicio" class="ml-4 mt-8"><i class="fa-solid fa-file fa-2x"
                                style="color: #ffffff;"></i></a>
                        <a href="/inicio">
                            <p
                                class="text-white border-b-4 border-b-yellow-400 hover:border-b-yellow-50 text-lg font-bold font-['Inter'] ml-4 mr-4 mt-5">
                                Modulo de cartas de presentación</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Nav horizontal-->
    <div class="flex flex-col w-4/5 bg-white">
        <div class="h-16 bg-gray-300">

            <!-- Contenido -->

            <div class="flex justify-between">


                <!--Input de busqueda y Boton buscar-->
                <div class="flex justify-between ml-4 mt-2">
                    <!--Input de busqueda   -->
                    <div class="col-sm-4 my-1" class="flex items-center p-2 rounded-md flex-1">
                        <label class="w-full relative text-gray-400 focus-within:text-gray-600 block">
                            <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3"
                                viewBox="0 0 25 25" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <!--value=" { $texto }}"-->
                            <x-input type="text" class="form-control" name="texto" class="w-full block pl-14"
                                placeholder="Buscar personas" />
                        </label>
                    </div>

                    <!--Boton buscar   -->
                    <div class="col-auto my-1 ml-4" class="lg:mr-40 mr-10 space-x-8">
                        <button type="submit" value="Buscar"
                            class="bg-sky-900 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                            <i class="fa-solid fa-magnifying-glass"></i> <a href="">Buscar</a>
                        </button>
                    </div>

                </div>



                <!--Botones de redes sociales, Boton de notificacion y Settings dropdown-->
                <div class="flex justify-between">

                    <!--Botones de redes sociales-->
                    <div class="mr-14">

                        <a href="https://www.facebook.com/campusjuliacaupeu/" target="_blank"><i
                                class="fa-brands fa-facebook fa-2x mr-4 mt-4" style="color: #007bff;"></i></a>
                        <a href="https://www.instagram.com/upeucampusjuliaca/" target="_blank"><i
                                class="fa-brands fa-instagram fa-2x mr-4 mt-4" style="color: #000000;"></i></a>
                        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fupeujuliaca"
                            target="_blank"><i class="fa-brands fa-x-twitter fa-2x mr-4 mt-4"
                                style="color: #000000;"></i></a>
                        <a href="https://www.youtube.com/channel/UC_JoTkUFsd9XJ9DPx7eE98A" target="_blank"><i
                                class="fa-brands fa-youtube fa-2x mr-8 mt-4" style="color: #ff0000;"></i></a>

                    </div>

                    <!--Boton de notificacion-->
                    <a href="" class="mt-4"><i class="fa-regular fa-bell fa-2x"
                            style="color: #004585;"></i></a>


                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex mr-14 mt-3">
                        <div class="ms-3 relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                                {{ Auth::user()->name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>
