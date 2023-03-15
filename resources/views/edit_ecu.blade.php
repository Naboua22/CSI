<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Modification d\'une ECU') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    
            <div class="mb-4 md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        {{-- Back End Developer --}}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    
    <div >
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    
            <form class="space-y-8 divide-y divide-gray-200" method="POST" action="{{route('ECU.update', $annee)}}">
                @csrf
                @method('PUT')
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="nombre_effectue" class="block text-md text-gray-700 sm:mt-px sm:pt-2">
                                Nombre d'heure effectué
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="nombre_effectue" id="nombre_effectue" autocomplete="given-name" class="block w-full  border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
    
                    </div>
    
                <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Annuler
                    </button>
                    <button
                        type="submit"
                        onclick=""
                        class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sauvegarder
                    </button>
                </div>
                </div>
            </form>
    
        </div>
    </div>
</x-app-layout>