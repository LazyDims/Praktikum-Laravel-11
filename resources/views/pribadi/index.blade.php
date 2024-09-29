<x-layout>
    <h1 class="text-3xl flex justify-center py-5 mx-5">
        Data Pribadi
    </h1>
    <x-layout-table>
        <a href="{{ route('pribadi.create') }}"
            class="mb-3 text-white hover:text-black inline-block p-2 bg-green-700 border-spacing-28 rounded">Tambah
            Data Pribadi</a>
        <thead>
            <tr
                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-gray-600">
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">NIK</th>
                <th class="px-4 py-3">Nama Mahasiswa</th>
                <th class="px-4 py-3">Tempat Tanggal Lahir</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($pribadi as $pr)
                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div class="relative w-8 h-8 rounded-full md:block">
                            </div>
                            <div>
                                <div class="text-ms text-black">{{ $pr->id_pribadi }} </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-ms border">{{ $pr->nik }} </td>
                    <td class="px-4 py-3 text-ms border">{{ $pr->nama_mhs }} </td>
                    <td class="px-4 py-3 text-ms border">{{ $pr->tempat_lahir }}, {{ $pr->tanggal_lahir }} </td>
                    <td class="px-4 py-3 text-sm border">
                        <form action="{{ route('pribadi.destroy', $pr->id_pribadi) }}">
                            <a href="{{ route('pribadi.edit', $pr->id_pribadi) }}"
                                class="text-white hover:text-gray-400 bg-blue-900 rounded p-2">Edit</a>
                            <button type="submit"
                                class="text-white hover:text-gray-400 bg-red-900 p-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-layout-table>
    {{ $pribadi->links() }}
</x-layout>
