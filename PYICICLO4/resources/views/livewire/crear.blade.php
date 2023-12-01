<script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>
<div class="container">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75">
            </div>
        </div>
        <!-- Modal -->
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <form action="">
                    <!-- Modal panel -->
                    <div
                        class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <!-- Modal content -->
                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_nombre"
                                        class="block text-gray-700 text-lg font-bold mb-0">Nombre de la empresa:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_nombre" wire:model="empresa_nombre" placeholder="Poner el nomnbre de la empresa">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_tipo_de_industria"
                                        class="block text-gray-700 text-lg font-bold mb-0">Tipo de industria:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_tipo_de_industria" wire:model="empresa_tipo_de_industria" placeholder="Poner el tipo de industria">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_descripcion"
                                        class="block text-gray-700 text-lg font-bold mb-0">Descripcion de la empresa:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_descripcion" wire:model="empresa_descripcion" placeholder="Poner la descripcion de la empresa">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_correo_electronico"
                                        class="block text-gray-700 text-lg font-bold mb-0">Correo electronico:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_correo_electronico" wire:model="empresa_correo_electronico" placeholder="Poner el correo electronico de la empresa">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_numero_de_telefono"
                                        class="block text-gray-700 text-lg font-bold mb-0">Numero de telefono:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_numero_de_telefono" wire:model="empresa_numero_de_telefono" placeholder="Poner el numero de telefono de la empresa">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_direccion_de_sedes"
                                        class="block text-gray-700 text-lg font-bold mb-0">Direccion de sedes:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_direccion_de_sedes" wire:model="empresa_direccion_de_sedes" placeholder="Poner las direcciones de las sedes">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_requisitos_para_estudiantes_practicantes"
                                        class="block text-gray-700 text-lg font-bold mb-0">Requisitos para estudiantes practicantes:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_requisitos_para_estudiantes_practicantes" wire:model="empresa_requisitos_para_estudiantes_practicantes" placeholder="Poner requisitos para estudiantes practicantes">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_area_de_pracicas"
                                        class="block text-gray-700 text-lg font-bold mb-0">Area de practicas:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_area_de_pracicas" wire:model="empresa_area_de_pracicas" placeholder="Poner el area de practicas">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_nombre_representante_encargado_de_PPP"
                                        class="block text-gray-700 text-lg font-bold mb-0">Nombre del representante:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_nombre_representante_encargado_de_PPP" wire:model="empresa_nombre_representante_encargado_de_PPP" placeholder="Poner el nombre del representante">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_cargo_representante_encargado_de_PPP"
                                        class="block text-gray-700 text-lg font-bold mb-0">Cargo del representante:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_cargo_representante_encargado_de_PPP" wire:model="empresa_cargo_representante_encargado_de_PPP" placeholder="Poner cargo del representante">
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_telefono_del_representante"
                                        class="block text-gray-700 text-lg font-bold mb-0">Telefono del representante:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_telefono_del_representante" wire:model="empresa_telefono_del_representante" placeholder="Poner el telefono del representante">
                                </div>
                            </div>

                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <!-- Subscribe button -->
                            <button wire:click.prevent="guardar()" type="button"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Guardar </button>
                            <!-- Cancel button -->
                            <button wire:click="cerrarModal()" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancelar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
