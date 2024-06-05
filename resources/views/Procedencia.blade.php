<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-10">
                <section class="orde">
                    <div class="contenedor'">
                        <div class="Card_Titulo">
                            <div class="flex max-md:flex-col justify-center text-4xl text-black dark:text-white">
                                <h1>Procedencia</h1>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">


                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Sitio de Muestreo:</label>
                                    <x-input class="w-full" />
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Nombre del sitio de muestreo:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Estado:</label>
                                    <x-select class="w-full">
                                        <option value="">selecciona </option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </x-select>
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Colonia:</label>
                                    <x-select class="w-full">
                                        <option value="">selecciona</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </x-select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Municipio:</label>
                                    <x-select class="w-full">
                                        <option value="">selecciona </option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </x-select>
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Calle:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No.Exterior:</label>
                                    <x-input class="w-full" />
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No.Interior:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">CP:</label>
                                    <x-input class="w-full" />
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Coordenadas GPS:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Registro SADER:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>

                        </div>

                        <div class="flex justify-between w-full flex-row-reverse mt-2">
                            <div>
                                <x-button-routing href="{{ route('datos_cliente') }}">Siguiente</x-button-routing>
                            </div>

                            <div>
                                <x-button-routing href="{{ route('analisis_solicitado') }}">Anterior</x-button-routing>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
