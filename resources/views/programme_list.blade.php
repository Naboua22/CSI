<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Programme') }}
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
                <div class="flex mt-4 md:mt-0 md:ml-4">
                    <a href="{{ route('program.create') }}" class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Créer
                    </a>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Id
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Date de début
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Date de fin
                            </th>
                            {{-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Role
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                              <span class="sr-only">Edit</span>
                            </th> --}}
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($programs as $program)

                            <tr class="bg-black">
                              <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                  {{$program->id}}
                              </td>
                              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{$program->annee_id}}
                              </td>
                              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{$program->filiere}}
                              </td>
                              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{$program->nom}}
                              </td>
                              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{$program->nombreUE}}
                              </td>
                              {{-- <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                jane.cooper@example.com
                              </td> --}}
                              {{-- <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                Admin
                              </td> --}}
                              <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="{{ route('program.edit', $program) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                              </td>
                              <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <form action="{{ route('program.destroy', $program) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="text-red-600 hover:text-indigo-900" type="submit">Delete</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>