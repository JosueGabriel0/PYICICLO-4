<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    </head>
    <body>
        @vite('resources/css/app.css')
        <script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>

        <!--Josue-->


    <nav class="flex justify-between">

            <div class="w-1/5 h-16 aspect-square bg-sky-900 border-b-4 border-b-yellow-400">
                <div class="w-4 h-4 left-0 top-0 bg-yellow-400"></div>

                <a href="{{ url('/') }}">
                    <div class="flex items-center justify-center">
                        <img class="w-40 h-15 mt-8 absolute" src="{{ asset('storage/images/Logo_upeu.png') }}" />
                    </div>
                </a>
            </div>

        <div class="flex w-4/5 h-16 aspect-square bg-gray-200 lg:ml-auto border-b-4 border-b-yellow-400">

                <div class="absolute">
                    <a href="{{ url('/') }}">
                        <div class="mt-3 ml-8 text-sky-900 text-3xl font-bold font-['Inter'] border-b-4 border-yellow-400 hover:border-sky-900">Bienvenida
                        </div>

                    </a>
                </div>

                <div class="flex ml-auto">

                <div class="mr-4 ">

                    <a href="https://www.facebook.com/campusjuliacaupeu/" target="_blank"><i class="fa-brands fa-facebook fa-2x mr-4 mt-4" style="color: #007bff;"></i></a>
                    <a href="https://www.instagram.com/upeucampusjuliaca/" target="_blank"><i class="fa-brands fa-instagram fa-2x mr-4 mt-4" style="color: #000000;"></i></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fupeujuliaca" target="_blank"><i class="fa-brands fa-x-twitter fa-2x mr-4 mt-4" style="color: #000000;"></i></a>
                    <a href="https://www.youtube.com/channel/UC_JoTkUFsd9XJ9DPx7eE98A" target="_blank"><i class="fa-brands fa-youtube fa-2x mr-8 mt-4" style="color: #ff0000;"></i></a>

                </div>

                @if (Route::has('login'))
                    <div class="mr-8 mt-5">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-slate-900 hover:text-yellow-400 dark:text-slate-900 dark:hover:text-yellow-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-slate-900 hover:text-yellow-400 dark:text-slate-900 dark:hover:text-yellow-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-slate-900 hover:text-yellow-400 dark:text-slate-900 dark:hover:text-yellow-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Register</a>
                            @endif
                        @endauth

                @endif
            </div>

            </div>

        </div>

    </nav>


        <!--termina Josue-->

        <!--empieza Josue-->
        <body class="w-full md:flex-col flex justify-between">

            <head>
            <div class="w-100 ml-4 mr-4 h-16 mt-2 rounded-lg aspect-square bg-sky-900 border-4 border-yellow-400 text-center text-white font-bold font-['Inter'] text-3xl">
            <div class="mt-2">
                Bienvenido al sistema de practicas pre profesionales
            </div>
            </div>
            </head>

            <body>
                <div class="w-100 ml-4 mr-4 h-80 mt-2 rounded-lg aspect-square bg-sky-900 border-4 border-yellow-400">

                    <div class="flex justify-between">

                    <!--cuadro 1-->
                    <div class=" text-center w-68 h-72 ml-4 mt-3 rounded-lg aspect-square bg-white border-4 border-yellow-400">

                        <i class="fa-solid fa-bullseye fa-3x mt-4" style="color: #0084ff;"></i>
                        <p class="mt-4 text-xl">
                            <b>Misión</b>
                            <div class="text-justify text-xs ml-2 mr-2 mt-2">
                            <p>Ser reconocidos por la Iglesia Adventista del Séptimo día y la sociedad como líderes en el desarrollo de investigaciones cientificas y tecnológicas en todas las áreas de las ciencias sobre la base de valores cristianos, servicio y en armonía con el medio ambiente, para contribuir a la transformación de una sociedad justa y equitativa.</p>
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
                                    class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/images/Carrusel_Item_2.png') }}"
                                    class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/images/Carrusel_Item_3.png') }}"
                                    class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/images/Carrusel_Item_4.png') }}"
                                    class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/images/Carrusel_Item_5.png') }}"
                                    class="border-4 border-yellow-400 rounded-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                                data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                                data-carousel-slide-to="4"></button>
                            </div>
                         <!-- Slider controls -->
                            <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50                   dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                            </button>
                            <button type="button"
                             class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                             data-carousel-next>
                             <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50                   dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                            </button>
                    </div>
                    <!--Fin de carrusel-->

                    <!--cuadro 2-->
                    <div class=" text-center w-68 h-72 mr-4 mt-3 rounded-lg aspect-square bg-white border-4 border-yellow-400">
                        <i class="fa-solid fa-eye fa-3x mt-4" style="color: #007bff;"></i>
                        <p class="mt-4 text-xl">
                            <b>Visión</b>
                            <div class="text-justify text-xs ml-2 mr-2 mt-2">
                            <p>Promover, gestionar y apoyar el desarrollo de investigadores capaces de generar conocimientos, en todas las áreas de las ciencias, desde una cosmovisión cristiana, preparando una comunidad de expertos y lideres comprometidos con la Iglesia Adventista del Séptimo Día y la sociedad.</p>
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

            <div class="flex w-full h-80 mt-2 aspect-square bg-sky-900 ">

                <div class="w-24 h-20 aspect-square bg-yellow-400 mt-7 ml-32"></div>
                <p class="text-4xl ml-36 mt-11 absolute text-white font-bold font-['Inter']">Licenciamiento y acreditación</p>

                <div class="flex justify-between items-center mt-28">
                    <img class="w-26 h-20" src="{{ asset('storage/images/Top10.png') }}" />
                <img class="w-26 h-20 ml-24" src="{{ asset('storage/images/Sunedu.png') }}" />
                <img class="w-26 h-20 ml-24" src="{{ asset('storage/images/Sineace.png') }}" />
                <img class="w-26 h-20 ml-24" src="{{ asset('storage/images/Agencia.png') }}" />
                </div>

            </div>

        <div class="w-full h-96 aspect-square bg-slate-900">

            <div class="flex justify-between">

        <!--termina Joel-->

                <div class="text-center mt-10 ml-48">
                <p class="text-white text-2xl font-bold font-['Inter'] underline hover:text-yellow-400">Sobre la UPeU</p>
                <a href="https://upeu.edu.pe/mision-y-vision/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-8">Misión y Visión</p></a>
                <a href="https://upeu.edu.pe/normatividad-institucional/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Normatividad Institucional</p></a>
                <a href="https://upeu.edu.pe/transparencia/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Transparencia</p></a>
                <a href="https://upeu.edu.pe/plan-estrategico/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Plan Estratégico</p></a>
                <a href="https://upeu.edu.pe/protocolos-covid-19/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Protocolos Covid- 19</p></a>
                </div>

                <div class="text-center mt-10">
                <p class="text-white text-2xl font-bold font-['Inter'] underline hover:text-yellow-400">Facultades</p>
                <a href="https://upeu.edu.pe/fce/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-8">Ciencias Empresariales</p></a>
                <a href="https://upeu.edu.pe/facihed/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Ciencias Humanas y Educación</p></a>
                <a href="https://upeu.edu.pe/fsalud/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Ciencias de la Salud</p></a>
                <a href="https://upeu.edu.pe/fia/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Ingeniería y Arquitectura</p></a>
                <a href="https://upeu.edu.pe/teologia/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Teología</p></a>
                </div>

                <div class="text-center mt-10 mr-36">
                <p class="text-white text-2xl font-bold font-['Inter'] underline hover:text-yellow-400">Contacto</p>
                <a href="https://upeu.edu.pe/" target="_blank"><p class="text-white text-lg font-bold font-['Inter'] mt-2">Campus Lima: +51 1-6186300</p></a>
                <a href="https://upeu.edu.pe/juliaca/" target="_blank"><p class="text-white text-lg font-bold font-['Inter'] mt-0">Campus Juliaca: +51 1-618632</p></a>
                <a href="https://upeu.edu.pe/tarapoto/" target="_blank"><p class="text-white text-lg font-bold font-['Inter'] mt-0">Campus Tarapoto: +51 1-6186303</p></a>
                <a href="https://admision.upeu.edu.pe/" target="_blank"><p class="text-white text-lg font-bold font-['Inter'] mt-2">Correo Admisión</p></a>
                <a href="https://upeu.edu.pe/" target="_blank"><p class="text-neutral-200 text-lg font-normal font-['Inter'] mt-0">Informes@upeu.edu.pe</p></a>
                <a href="https://upeu.edu.pe/politica-de-privacidad/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Políticas de privacidad </p></a>
                <a href="https://upeu.edu.pe/terminos-y-condiciones-de-uso/" target="_blank"><p class="text-white text-lg font-medium font-['Inter'] mt-4">Términos y condiciones de datos</p></a>
                <a href="https://upeu.edu.pe/librodereclamaciones/" target="_blank">
                    <div class="ml-12 w-52 h-8 aspect-square bg-slate-900 border-2 border-yellow-400 hover:border-yellow-200 text-yellow-400  hover:text-yellow-200">
                        <p class="m-1  text-sm font-medium font-['Inter']">LIBRO DE RECLAMACIONES</p>
                    </div>
                </a>
                </div>



            </div>

        </div>
        <!--termina Joel-->

        <div class="w-full h-14 aspect-square bg-sky-900">

            <div class="flex justify-between">


                    <p class="text-zinc-400 text-sm font-semibold font-['Inter'] ml-44 mt-5">
                        Copyright © UPeU 2023. Todos los derechos son reservados — Implementados por:
                    </p>



                    <a href="/"><p class="text-yellow-400 hover:text-yellow-200 text-xl font-semibold font-['Inter'] mr-80 mt-4">UPeU</p></a>


                    <div class="mr-4 ">

                        <a href="https://www.facebook.com/campusjuliacaupeu/" target="_blank"><i class="fa-brands fa-facebook fa-2x mr-4 mt-3" style="color: #ffffff;"></i></a>
                        <a href="https://www.instagram.com/upeucampusjuliaca/" target="_blank"><i class="fa-brands fa-instagram fa-2x mr-4 mt-3" style="color: #ffffff;"></i></a>
                        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fupeujuliaca" target="_blank"><i class="fa-brands fa-x-twitter fa-2x mr-4 mt-3" style="color: #ffffff;"></i></a>
                        <a href="https://www.youtube.com/channel/UC_JoTkUFsd9XJ9DPx7eE98A" target="_blank"><i class="fa-brands fa-youtube fa-2x mr-5 mt-3" style="color: #ffffff;"></i></a>

                    </div>

                </div>









        </footer>
        <!--termina Joel-->

    </body>
</html>




