



<!--no borrar nada de esto-->
<x-guest-layout>
    <x-authentication-card>
      <x-slot name="logo">
            <x-authentication-card-logo />

            <div class="w-[1440px] h-[1024px] relative bg-white">
                <div class="w-[1440px] h-[1024px] left-0 top-0 absolute bg-gradient-to-b from-sky-900 via-cyan-900 to-sky-900"></div>
                <div class="w-[22px] h-[25px] left-0 top-[3px] absolute bg-yellow-400"></div>
                <div class="w-[980px] h-[689px] left-[208px] top-[181px] absolute bg-zinc-300 rounded-[20px]"></div>
                <!--todo el cuadro-->
                <div class="left-[341px] top-[375px] absolute text-black text-base font-bold font-['Inter']">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <!--email-->

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                                <!--password-->

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                                 <!--remenber-->

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                                <!--forgot your password-->
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                                 <!--boton de login-->
                        <x-button class="ms-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form></div>
                <div class="w-[468px] h-[653px] left-[698px] top-[200px] absolute bg-sky-800 rounded-[20px]"></div>
                <div class="left-[400px] top-[277px] absolute text-sky-900 text-[32px] font-bold font-['Inter']">login</div>
                <div class="left-[299px] top-[335px] absolute text-sky-600 text-base font-bold font-['Inter']">if you already a menber, easily log in</div>
                <div class="w-[220px] h-[49px] left-[329px] top-[621px] absolute bg-white rounded-[10px]"></div>
                <img class="w-8 h-[33px] left-[351px] top-[629px] absolute" src="{{ asset('storage/images/google.webp') }}" />
                <div class="left-[390px] top-[636px] absolute text-black text-base font-bold font-['Inter']">Login with Google</div>
                <div class="left-[300px] top-[706px] absolute text-black text-base font-bold font-['Inter']">Forgot your password?</div>
                <div class="w-[300px] h-[0px] left-[299px] top-[776px] absolute origin-top-left rotate-[0.57deg] border border-sky-700"></div>
                <div class="w-[106px] h-[42px] left-[497px] top-[799px] absolute bg-white rounded-[10px]"></div>
                <div class="left-[507px] top-[809px] absolute text-black text-lg font-bold font-['Inter']">Resgister</div>
                <div class="left-[299px] top-[811px] absolute text-black text-base font-bold font-['Inter']">Don´t have an account</div>
                <img class="w-[405px] h-[244px] left-[730px] top-[268px] absolute rounded-[20px]" src="{{ asset('storage/images/uni22.png') }}" />
                <img class="w-[405px] h-[244px] left-[730px] top-[555px] absolute rounded-[20px]" src="{{ asset('storage/images/upeu22.png') }}" />
                <div class="w-[621px] h-[200px] left-[433px] top-[76px] absolute"><span style="text-white text-[35px] font-bold font-['Inter']">SISTEMA PARA EL DESARROLLO DE PRACTICAS PRE PROFESIONALES</span><span style="text-white text-[10px] font-normal font-['Inter']"></span></div>
                <h1 class="w-500">holadfvbkdfngksfn</h1>
              </div>

        </x-slot>
        <!--los 4 son importantes-->
        @if (session('status'))
        @endif
    </x-authentication-card>
</x-guest-layout>
