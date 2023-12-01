<div class="flex">
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
                        <a href="/inicio" class="ml-1 mt-4"><i class="fa-solid fa-house fa-2x"
                                style="color: #ffffff;"></i></a>
                        <a href="/inicio">
                            <p
                                class="text-white border-b-4 border-b-yellow-400 hover:border-b-yellow-50 text-lg font-bold font-['Inter'] mr-40 mt-5">
                                Inicio</p>
                        </a>
                    </div>

                    <div class="flex justify-between">
                        <a href="/inicio" class="ml-2 mt-8"><i class="fa-solid fa-file fa-2x"
                                style="color: #ffffff;"></i></a>
                        <a href="/inicio">
                            <p
                                class="text-white border-b-4 border-b-yellow-400 hover:border-b-yellow-50 text-lg font-bold font-['Inter'] ml-4 mr-4 mt-5">
                                Modulo de propuestas de convocatoria</p>
                        </a>
                    </div>



                    <div class="flex justify-between">
                        <a href="/inicio" class="ml-2 mt-8"><i class="fa-solid fa-file fa-2x"
                                style="color: #ffffff;"></i></a>
                        <a href="/inicio">
                            <p
                                class="text-white border-b-4 border-b-yellow-400 hover:border-b-yellow-50 text-lg font-bold font-['Inter'] ml-4 mr-9 mt-5">
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

        <!--Contenido de la pagina-->

        <body>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
            @vite('resources/css/app.css')
            <script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>

            <!--Josue-->





            <!--termina Josue-->

            <!--empieza Josue-->

            <body class="w-full md:flex-col flex justify-between">

                <head>
                    <div
                        class="w-100 ml-4 mr-4 h-14 mt-2 rounded-lg aspect-square bg-sky-900 border-4 border-yellow-400 text-center text-white font-bold font-['Inter'] text-2xl">
                        <div class="mt-2">
                            Bienvenido al sistema de practicas pre profesionales para el rol de "Coordinador de PPP"
                        </div>
                    </div>
                </head>

                <body>
                    <div
                        class="w-100 ml-4 mr-4 h-80 mt-2 rounded-lg aspect-square bg-sky-900 border-4 border-yellow-400">

                        <div class="flex justify-between">

                            <!--cuadro 1-->
                            <div
                                class=" text-center w-60 h-64 ml-4 mt-3 rounded-lg aspect-square bg-white border-4 border-yellow-400">

                                <i class="fa-solid fa-bullseye fa-2x mt-2" style="color: #0084ff;"></i>
                                <p class="mt-2 text-lg">
                                    <b>Misión</b>
                                <div class="text-justify text-xs ml-2 mr-2 mt-1">
                                    <p>Ser reconocidos por la Iglesia Adventista del Séptimo día y la sociedad como
                                        líderes en el desarrollo de investigaciones cientificas y tecnológicas en todas
                                        las áreas de las ciencias sobre la base de valores cristianos, servicio y en
                                        armonía con el medio ambiente, para contribuir a la transformación de una
                                        sociedad justa y equitativa.</p>
                                </div>
                                </p>

                            </div>
                            <!--Fin de columna 1-->

                            <!--carrusel-->
                            <div id="default-carousel" class="relative w-1/2" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/images/Carrusel_Item_1.png') }}"
                                            class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/images/Carrusel_Item_2.png') }}"
                                            class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/images/Carrusel_Item_3.png') }}"
                                            class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/images/Carrusel_Item_4.png') }}"
                                            class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 5 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/images/Carrusel_Item_5.png') }}"
                                            class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div
                                    class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50                   dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50                   dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                            <!--Fin de carrusel-->

                            <!--cuadro 2-->
                            <div
                                class=" text-center w-60 h-64 mr-4 mt-3 rounded-lg aspect-square bg-white border-4 border-yellow-400">
                                <i class="fa-solid fa-eye fa-2x mt-2" style="color: #007bff;"></i>
                                <p class="mt-2 text-xl">
                                    <b>Visión</b>
                                <div class="text-justify text-xs ml-2 mr-2 mt-1">
                                    <p>Promover, gestionar y apoyar el desarrollo de investigadores capaces de generar
                                        conocimientos, en todas las áreas de las ciencias, desde una cosmovisión
                                        cristiana, preparando una comunidad de expertos y lideres comprometidos con la
                                        Iglesia Adventista del Séptimo Día y la sociedad.</p>
                                </div>
                                </p>
                            </div>
                            <!--Fin de columna 2-->

                        </div>

                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
                </body>










            </body>
            <!--termina Josue-->

            <!--empieza Joel-->
            <footer>

                <div class="flex w-full h-40 mt-2 aspect-square bg-sky-900 ">

                    <div class="w-12 h-10 aspect-square bg-yellow-400 mt-3 ml-16"></div>
                    <p class="text-2xl ml-20 mt-5 absolute text-white font-bold font-['Inter']">Licenciamiento y
                        acreditación</p>

                    <div class="flex justify-between items-center mt-12 ml-48">
                        <img class="w-13 h-10" src="{{ asset('storage/images/Top10.png') }}" />
                        <img class="w-13 h-10 ml-12" src="{{ asset('storage/images/Sunedu.png') }}" />
                        <img class="w-13 h-10 ml-12" src="{{ asset('storage/images/Sineace.png') }}" />
                        <img class="w-13 h-10 ml-12" src="{{ asset('storage/images/Agencia.png') }}" />
                    </div>

                </div>

                <div class="w-full h-56 aspect-square bg-slate-900">

                    <div class="flex justify-between">

                        <!--termina Joel-->

                        <div class="text-center mt-5 ml-24">
                            <p class="text-white text-sm font-bold font-['Inter'] underline hover:text-yellow-400">
                                Sobre la UPeU</p>
                            <a href="https://upeu.edu.pe/mision-y-vision/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-4">Misión y Visión</p>
                            </a>
                            <a href="https://upeu.edu.pe/normatividad-institucional/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Normatividad
                                    Institucional</p>
                            </a>
                            <a href="https://upeu.edu.pe/transparencia/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Transparencia</p>
                            </a>
                            <a href="https://upeu.edu.pe/plan-estrategico/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Plan Estratégico</p>
                            </a>
                            <a href="https://upeu.edu.pe/protocolos-covid-19/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Protocolos Covid- 19</p>
                            </a>
                        </div>

                        <div class="text-center mt-5">
                            <p class="text-white text-sm font-bold font-['Inter'] underline hover:text-yellow-400">
                                Facultades</p>
                            <a href="https://upeu.edu.pe/fce/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-4">Ciencias Empresariales
                                </p>
                            </a>
                            <a href="https://upeu.edu.pe/facihed/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Ciencias Humanas y
                                    Educación</p>
                            </a>
                            <a href="https://upeu.edu.pe/fsalud/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Ciencias de la Salud</p>
                            </a>
                            <a href="https://upeu.edu.pe/fia/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Ingeniería y Arquitectura
                                </p>
                            </a>
                            <a href="https://upeu.edu.pe/teologia/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Teología</p>
                            </a>
                        </div>

                        <div class="text-center mt-5 mr-24">
                            <p class="text-white text-sm font-bold font-['Inter'] underline hover:text-yellow-400">
                                Contacto</p>
                            <a href="https://upeu.edu.pe/" target="_blank">
                                <p class="text-white text-xs font-bold font-['Inter'] mt-1">Campus Lima: +51 1-6186300
                                </p>
                            </a>
                            <a href="https://upeu.edu.pe/juliaca/" target="_blank">
                                <p class="text-white text-xs font-bold font-['Inter'] mt-0">Campus Juliaca: +51
                                    1-618632</p>
                            </a>
                            <a href="https://upeu.edu.pe/tarapoto/" target="_blank">
                                <p class="text-white text-xs font-bold font-['Inter'] mt-0">Campus Tarapoto: +51
                                    1-6186303</p>
                            </a>
                            <a href="https://admision.upeu.edu.pe/" target="_blank">
                                <p class="text-white text-xs font-bold font-['Inter'] mt-1">Correo Admisión</p>
                            </a>
                            <a href="https://upeu.edu.pe/" target="_blank">
                                <p class="text-neutral-200 text-xs font-normal font-['Inter'] mt-0">
                                    Informes@upeu.edu.pe</p>
                            </a>
                            <a href="https://upeu.edu.pe/politica-de-privacidad/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Políticas de privacidad
                                </p>
                            </a>
                            <a href="https://upeu.edu.pe/terminos-y-condiciones-de-uso/" target="_blank">
                                <p class="text-white text-xs font-medium font-['Inter'] mt-2">Términos y condiciones de
                                    datos</p>
                            </a>
                            <a href="https://upeu.edu.pe/librodereclamaciones/" target="_blank">
                                <div
                                    class="ml-6 w-26 h-4 aspect-square bg-slate-900 border-1 border-yellow-400 hover:border-yellow-200 text-yellow-400  hover:text-yellow-200">
                                    <p class="m-1  text-xs font-medium font-['Inter']">LIBRO DE RECLAMACIONES</p>
                                </div>
                            </a>
                        </div>



                    </div>

                </div>
                <!--termina Joel-->

                <div class="w-full h-9 aspect-square bg-sky-900">

                    <div class="flex justify-between">


                        <p class="text-zinc-400 text-xs font-semibold font-['Inter'] ml-24 mt-2">
                            Copyright © UPeU 2023. Todos los derechos son reservados — Implementados por:
                        </p>



                        <a href="/">
                            <p
                                class="text-yellow-400 hover:text-yellow-200 text-sm font-semibold font-['Inter'] mr-80 mt-2">
                                UPeU</p>
                        </a>


                        <div class="mr-2 ">

                            <a href="https://www.facebook.com/campusjuliacaupeu/" target="_blank"><i
                                    class="fa-brands fa-facebook fa-x mr-2 mt-1" style="color: #ffffff;"></i></a>
                            <a href="https://www.instagram.com/upeucampusjuliaca/" target="_blank"><i
                                    class="fa-brands fa-instagram fa-x mr-2 mt-1" style="color: #ffffff;"></i></a>
                            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fupeujuliaca"
                                target="_blank"><i class="fa-brands fa-x-twitter fa-x mr-2 mt-3"
                                    style="color: #ffffff;"></i></a>
                            <a href="https://www.youtube.com/channel/UC_JoTkUFsd9XJ9DPx7eE98A" target="_blank"><i
                                    class="fa-brands fa-youtube fa-x mr-2 mt-1" style="color: #ffffff;"></i></a>

                        </div>

                    </div>



                </div>





            </footer>
            <!--termina Joel-->

        </body>

    </div>
</div>
