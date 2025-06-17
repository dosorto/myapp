<div>
<div class="max-w-6xl mx-auto bg-white p-6 rounded shadow-md">
    <h2 class="text-3xl font-extrabold dark:text-white">Personas</h2>
    <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
    
    <div class="flex items-center justify-between  md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
        
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live="search" type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
        </div>
        
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3">
                    Identidad
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Opciones</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($personas as $p)
        <h1> </h1>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$p->id}}
                </th>
                <td class="px-6 py-4">
                    {{$p->primer_nombre}}  {{$p->segundo_nombre}} 
                </td>
                <td class="px-6 py-4">
                    {{$p->primer_apellido}} {{$p->segundo_apellido}}
                </td>
                <td class="px-6 py-4">
                    {{$p->dni}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="5">No Record Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <br>
    {{ $personas->links()  }}
</div>
</div>
