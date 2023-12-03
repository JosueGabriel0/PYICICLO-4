<!--Contenido de la pagina-->

<div class="py-5">
    <script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message') }}</h4>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="crear()"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if ($modal)
                @include('livewire.crear')
            @endif

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead>
                        <tr class="bg-indigo-600  text-white">
                            <th class="px-4 py-2">Id</th>
                            <th class="px-4 py-2">Nombre de la empresa</th>
                            <th class="px-4 py-2">Tipo de industria</th>
                            <th class="px-4 py-2">Descripcion</th>

                            <th class="px-4 py-2">Correo electronico</th>
                            <th class="px-4 py-2">Numero de telefono</th>
                            <th class="px-4 py-2">Direccion de sedes</th>
                            <th class="px-4 py-2">Requisitos para estudiantes practicantes</th>
                           <th class="px-4 py-2">Area de practicas</th>
                            <th class="px-4 py-2">Nombre del repepresentante encargado de PPP</th>
                            <th class="px-4 py-2">Cargo del representante encargado de PPP</th></th>
                            <th class="px-4 py-2">Telefono del representante
                            <th class="px-4 py-2">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empresas as $empresa)
                            <tr>
                                <td class="border px-4 py-2">{{ $empresa->id }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_nombre }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_tipo_de_industria }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_descripcion }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_correo_electronico }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_numero_de_telefono }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_direccion_de_sedes }}</td>
                                <td class="border px-4 py-2">
                                    {{ $empresa->empresa_requisitos_para_estudiantes_practicantes }}</td>
                               <td class="border px-4 py-2">{{ $empresa->empresa_area_de_pracicas }}</td>
                                <td class="border px-4 py-2">
                                    {{ $empresa->empresa_nombre_representante_encargado_de_PPP }}</td>
                                <td class="border px-4 py-2">
                                    {{ $empresa->empresa_cargo_representante_encargado_de_PPP }}</td>
                                <td class="border px-4 py-2">{{ $empresa->empresa_telefono_del_representante }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <button wire:click="editar({{ $empresa->id }})"
                                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar <i
                                            class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                                    <button wire:click="borrar({{ $empresa->id }})"
                                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4">Borrar <i
                                            class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="px-6 py-3">
            </div>


            <div>


            </div>
        </div>
    </div>


</div>
