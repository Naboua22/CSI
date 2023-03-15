<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Modification d\'un programme académique') }}
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
    
            <form class="space-y-8 divide-y divide-gray-200" method="POST" action="{{route('program.update', $annee)}}">
                @csrf
                @method('PUT')
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div>
    
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nom" class="block text-md text-gray-700 sm:mt-px sm:pt-2">
                                    Nom
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" value="{{$program->nom}}" name="nom" id="nom" autocomplete="given-name" class="block w-full  border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="annee_id" class="block text-md text-gray-700 sm:mt-px sm:pt-2">
                                    Année Académique
                                </label>
                                
                                <select name="annee_id" id="annee_id" class=" appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    @foreach ($annees as $annee)<option value="{{$annee->id}}">{{$annee->nom}}</option>@endforeach
                                </select>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="filiere" class="block text-md text-gray-700 sm:mt-px sm:pt-2">
                                    Filiere
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" value="{{$program->filiere}} name="filiere" id="filiere" autocomplete="given-name" class="block w-full  border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nombre_ue" class="block text-md text-gray-700 sm:mt-px sm:pt-2">
                                    Nombre d'UE
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="integer" value="{{$program->nombre_ue}} name="nombre_ue" id="nombre_ue" autocomplete="given-name" class="block w-full  border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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