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
                                <h1>Datos de la muestra</h1>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">


                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Categoria:</label>
                                    <x-select class="w-full">
                                        <option value="">selecciona </option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </x-select>
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Sub.Categoria:</label>
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
                                    <label for="">Tipo de Muestra:</label>
                                    <x-select class="w-full">
                                        <option value="">selecciona</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </x-select>
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Cantidad a enviar:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">

                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Recipiente:</label>
                                    <x-select class="w-full">
                                        <option value="">selecciona </option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </x-select>
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No.Lote:</label>
                                    <x-input class="w-full" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Fecha de muestreo:</label>
                                    <x-input type="date" class="w-full" />
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Productor o responsable: </label>
                                    <x-input class="w-full" />
                                </div>
                            </div>
                        </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">Otros Datos: (Para que necesita )</label>
                                   
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>

                            </div>
                            <div class="flex justify-between w-full flex-row-reverse mt-2">
                                <div>
                                    <x-button-routing
                                        href="{{ route('analisis_solicitado') }}">Siguiente</x-button-routing>
                                </div>


                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
