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
                                <h1>Datos del cliente o Interesado</h1>
                            </div>
                        </div>
                        <form action="">
                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">

                                <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Razon Social:</label>
                                        <x-input class="w-full" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">RFC:</label>
                                        <x-input class="w-full" />
                                    </div>
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Regimen Fiscal:</label>
                                        <x-input class="w-full" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Uso de CFDI {{ csrf_field() }}:</label>
                                        <x-input class="w-full" />
                                    </div>
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Tipo:</label>
                                        <x-select class="w-full">
                                            <option value="">selecciona </option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </x-select>
                                    </div>
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Correo de Contacto:</label>
                                        <x-input class="w-full" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Telefono de Contacto:</label>
                                        <x-input class="w-full" />
                                    </div>
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Correo Alternativo {{ csrf_field() }}:</label>
                                        <x-input class="w-full" />
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                    <div class="flex flex-col text-black dark:text-white">
                                        <label for="">Telefono altenativo:</label>
                                        <x-input class="w-full" />
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-between w-full flex-row-reverse mt-2">
                                <div>
                                    <x-button-routing href="{{ route('orden') }}">Siguiente</x-button-routing>
                                </div>

                                <div>
                                    <x-button-routing href="{{ route('procedencia') }}">Anterior</x-button-routing>
                                </div>
                            </div>

                    </div>

                    </form>

            </div>
            </section>
        </div>
    </div>
    </div>
</x-app-layout>
