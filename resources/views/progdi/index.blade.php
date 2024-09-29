<x-layout>
    <h1 class="text-3xl flex justify-center py-5 mx-5">
        Data Program Studi
    </h1>
    <x-layout-table>
        <a href="{{ route('progdi.create') }}"
            class="mb-3 text-white hover:text-black inline-block p-2 bg-green-700 border-spacing-28 rounded">Tambah
            Progdi</a>
        <thead>
            <tr
                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize  border-b border-gray-600">
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nama Fakultas</th>
                <th class="px-4 py-3">Nama Program Studi</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($progdi as $p)
                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div class="relative w-8 h-8 rounded-full md:block">
                            </div>
                            <div>
                                <p class="text-ms text-black">{{ $p->id_progdi }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-ms border">{{ $p->nm_fakultas }} </td>
                    <td class="px-4 py-3 text-ms border">{{ $p->nm_progdi }} </td>
                    <td class="px-4 py-3 text-sm border">
                        <form action="{{ route('progdi.destroy', $p->id_progdi) }}">
                            <a href="{{ route('progdi.edit', $p->id_progdi) }}"
                                class="text-white hover:text-gray-400 bg-blue-900 rounded p-2">Edit</a>
                            <button type="submit"
                                class="text-white hover:text-gray-400 bg-red-900 p-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-layout-table>
    {{ $progdi->links() }}
</x-layout>
