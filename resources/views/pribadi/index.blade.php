<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Data Pribadi' }} </title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <h1 class="text-3xl flex justify-center p-4">
        Data Pribadi Mahasiswa
    </h1>
    <a href="{{ route('pribadi.create') }}"
        class="ml-7 text-white hover:text-black inline-block p-2 bg-green-700 border-spacing-28 rounded">Tambah
        Data Pribadi</a>
    <table>
        <tr>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        No.</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        NIK</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Nama Mahasiswa</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Tempat Tanggal Lahir</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Action</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @foreach ($pribadi as $pr)
                                    <tr>
                                        <td class="whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center ml-6">
                                                <div class="w-5 h-5">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $pr->id }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $pr->nik }} </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $pr->nama_mhs }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $pr->tempat_lahir }} /
                                                {{ $pr->tanggal_lahir }} </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                                            <form action="{{ route('pribadi.destroy', $pr->id) }}" method="POST">
                                                <a href="{{ route('pribadi.edit', $pr->id) }}"
                                                    class="text-white hover:text-gray-400 bg-blue-900 rounded p-2">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-white hover:text-gray-400 bg-red-900 p-2 rounded">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pribadi->links() }}
                    </div>
                </div>
            </div>
        </tr>
    </table>
</body>

</html>
