<x-layout>
    <h1 class="text-3xl flex justify-center py-5 mx-5">
        Data Mahasiswa
    </h1>
    <x-search></x-search>
    <x-layout-table>
        <thead>
            <tr
                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize  border-gray-600">
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">NIM</th>
                <th class="px-4 py-3">Nama Mahasiswa</th>
                <th class="px-4 py-3">Fakultas / Progdi</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($mahasiswa as $mhs)
                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div class="relative w-8 h-8 rounded-full md:block">
                            </div>
                            <div>
                                <div class="text-ms text-black">{{ $mhs->id_pribadi }} </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-ms border">{{ $mhs->nim }} </td>
                    <td class="px-4 py-3 text-ms border">{{ $mhs->nama_mhs }} </td>
                    @if (empty($mhs->nm_fakultas && $mhs->nm_progdi))
                        <td class="px-4 py-3 text-ms border">{{ 'Register First' }} </td>
                    @else
                        <td class="px-4 py-3 text-ms border">{{ $mhs->nm_fakultas }}, {{ $mhs->nm_progdi }} </td>
                    @endif
                    <td class="px-4 py-3 text-sm border">
                        @if (empty($mhs->nim))
                            <a href="/mahasiswa/join/{{ $mhs->id_pribadi }}"
                                class="text-white hover:text-gray-400 bg-neutral-700 rounded p-2">Not Registered</a>
                        @else
                            <button type="submit"
                                class="text-white hover:text-gray-400 bg-blue-500 p-2 rounded">Registered</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-layout-table>
    {{ $mahasiswa->links() }}
</x-layout>
