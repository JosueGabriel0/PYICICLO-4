@vite('resources/css/app.css')

@if (count($errors) > 0)

    <div role="alert">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Requerido
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </p>
        </div>
    </div>



@endif

<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-2">
    <h1 class="font-bold text-white capitalize dark:text-white font-serif text-center text-2xl mb-14">Formulario para
        {{ $modo }} empresas</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="ps_nombre">nombre de empresa</label>
                <input type="text" name="empresa_nombre"
                    value="{{ isset($persona->empresa_nombre) ? $persona->empresa_nombre : old('empresa_nombre') }}" id="empresa_nombre"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="empresa_tipo_de_industria">Apellido paterno</label>
                <input type="text" name="empresa_tipo_de_industria"
                    value="{{ isset($persona->empresa_tipo_de_industria) ? $persona->empresa_tipo_de_industria : old('empresa_tipo_de_industria') }}"
                    id="empresa_tipo_de_industria"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="empresa_descripcion">Apellido materno</label>
                <input type="text" name="empresa_descripcion"
                    value="{{ isset($persona->empresa_descripcion) ? $persona->empresa_descripcion : old('empresa_descripcion') }}" id="empresa_descripcion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="empresa_correo_electronico">Edad</label>
                <input type="text" name="empresa_correo_electronico"
                    value="{{ isset($persona->empresa_correo_electronico) ? $persona->empresa_correo_electronico : old('empresa_correo_electronico') }}" id="empresa_correo_electronico"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="empresa_numero_de_telefono">Dni</label>
                <input type="text" name="empresa_numero_de_telefono"
                    value="{{ isset($persona->empresa_numero_de_telefono) ? $persona->empresa_numero_de_telefono : old('empresa_numero_de_telefono') }}" id="empresa_numero_de_telefono"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="empresa_direccion_de_sedes">Correo</label>
                <input type="text" name="empresa_direccion_de_sedes"
                    value="{{ isset($persona->empresa_direccion_de_sedes) ? $persona->empresa_direccion_de_sedes : old('empresa_direccion_de_sedes) }}" id="empresa_direccion_de_sedes"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="empresa_requisitos">Celular</label>
                <input type="text" name="empresa_requisitos" value="{{ isset($persona->empresa_requisitos) ? $persona->empresa_requisitos : old('empresa_requisitos') }}"
                    id="empresa_requisitos"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_direccion">Direccion</label>
                <input type="text" name="ps_direccion"
                    value="{{ isset($persona->ps_direccion) ? $persona->ps_direccion : old('ps_direccion') }}" id="ps_direccion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_estado_civil">Estado civil</label>
                <input type="text" name="ps_estado_civil"
                    value="{{ isset($persona->ps_estado_civil) ? $persona->ps_estado_civil : old('ps_estado_civil') }}" id="ps_estado_civil"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_fecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" name="ps_fecha_nacimiento"
                    value="{{ isset($persona->ps_fecha_nacimiento) ? $persona->ps_fecha_nacimiento : old('ps_fecha_nacimiento') }}" id="ps_fecha_nacimiento"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_sexo">Sexo</label>
                <input type="text" name="ps_sexo"
                    value="{{ isset($persona->ps_sexo) ? $persona->ps_sexo : old('ps_sexo') }}" id="ps_sexo"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_usuario">Usuario</label>
                <input type="text" name="ps_usuario"
                    value="{{ isset($persona->ps_usuario) ? $persona->ps_usuario : old('ps_usuario') }}" id="ps_usuario"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_password">Password</label>
                <input type="text" name="ps_password"
                    value="{{ isset($persona->ps_password) ? $persona->ps_password : old('ps_password') }}" id="ps_password"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_rol">Rol</label>
                <input type="text" name="ps_rol"
                    value="{{ isset($persona->ps_rol) ? $persona->ps_rol : old('ps_rol') }}" id="ps_rol"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

        </div>

        <div class="flex justify-end mt-6">

            <a href="{{ url('persona/') }}"
                class=" mr-5 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600">Regresar</a>

            <input
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600"
                type="submit" value=" {{ $modo }} datos">
        </div>
    </form>
</section>
