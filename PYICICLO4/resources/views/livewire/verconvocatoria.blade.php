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
<div>
        <div class="w-[full] h-[120px] bg-sky-900 bg-opacity-95 rounded-[14px] border-4 border-yellow-400">
           <div class="border-spacing-5 bg-sky-700 ml-96 mr-96 rounded-md"> <h1 class="text-3xl text-white mt-3 text-center ">MUNICIPALIDAD DE JULIACA</h1></div>
           <div class="border-spacing-5 bg-sky-700 ml-96 mr-96 rounded-md"> <h1 class=" text-3xl text-white mt-3 text-center">Fecha de Publicacion</h1></div></div>


        <div class="w-[full] h-[250px] bg-sky-900 bg-opacity-95 rounded-[14px] border-4 border-yellow-400">
            <img class="w-[500] h-[239px] rounded-[10px]" src="{{ asset('storage/images/imgjuli.png') }}" /></div>



<div class="w-[full] h-[500px] bg-sky-900 bg-opacity-95 rounded-[14px] border-4 border-yellow-400 flex">

<div class="h-16">
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-lg text-white mt-3 ">Información de la sede de PPP: La Municipalidad Provincial de San Román es la entidad encargada de la administración y gobierno de la ciudad de Juliaca, ubicada en la región de Puno, Perú.</h1></div>

            <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-lg text-white mt-3">Requisitos de elegibilidad: 1. Ser Estudiante Activo 2. Nivel Académico 3. Disponibilidad 4. Cumplir con los Plazos de Postulación 5. Documentación Requerida 6. Entrevista o Evaluación 7. Cumplir con Requisitos Específicos.</h1></div>

                <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-lg text-white mt-3 ">Beneficios de la empresa: 1. Formación y Aprendizaje 2. Supervisión y Orientación 3. Experiencia Práctica 4. Networking 5. Posibilidad de Contratación 6. Apoyo Económico 7. Flexibilidad 8. Certificación o Reconocimiento.</h1></div>

                    <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-lg text-white mt-3 ">Descripción de la remuneración de la empresa: El pago será mensual</h1></div>



                            <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-lg text-white mt-3 ">Información de contacto: 945685721</h1></div>


                        </div>

<div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Fecha de inicio: 29/01/2023</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Fecha de fin: 08/02/2023</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Número de plazas disponibles:</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Documentos requeridos:</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Ver documentos</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Políticas de confidencialidad:</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Ver políticas de confidencialidad</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Ubicación: Jr. Jáuregui N°321</h1></div>
        <div class="border-spacing-5 bg-sky-700 rounded-md ml-2 mr-4"> <h1 class="text-2xl text-white mt-3 w-96">Ver ubicación</h1></div>
        <a href="http://127.0.0.1:8000/inicio"><p class="text-amber-300 text-lg font-bold font-['Inter'] mt-2 ml-48 mr-64">REGRESAR</p></a>
        <a href="https://bitel.com.pe/nosotros/history-of-bitel?categoryId=2824660" target="_blank"><p class="text-green-400 text-lg font-bold font-['Inter'] mt-2ml-8">VER OTRA CONVOCATORIA</p></a>


        </div>



</div>



</div>
</div>

    </div>
</div>
