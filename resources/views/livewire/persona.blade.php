<div>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3">
                    DNI
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $p )
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $p->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $p->primer_nombre }} {{$p->segundo_nombre }}
                </td>
                <td class="px-6 py-4">
                    {{ $p->primer_apellido}} {{$p->segundo_apellido }}
                </td>
                <td class="px-6 py-4">
                     {{ $p->dni}}
                </td>
            </tr>
                
            @endforeach 
            
            
        </tbody>
    </table>
</div>

</div>
