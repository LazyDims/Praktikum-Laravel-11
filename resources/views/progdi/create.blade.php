<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ 'Tambah Prodi' }} </title>
</head>

<body>
    <h2 class="text-2xl flex justify-center p-4">
        Tambah Program Studi
    </h2>
    <a href="{{ route('progdi.index') }}"
        class="ml-7 text-white hover:text-black inline-block p-2 bg-blue-700 rounded">Kembali</a>
    @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('progdi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-8 ml-7">
            <div class="col-span-4">
                <label for="name" class="block text-sm leading-6 text-gray-900 font-medium">Nama
                    Fakultas</label>
                <div class="mt-2">
                    <input name="nm_fakultas" type="text"
                        class="block w-5/6  max-h-6 p-4 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                    @error('nm_fakultas')
                        <div class="text-red-600">{{ 'Harap Diisi' }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-8 ml-7">
            <div class="col-span-4">
                <label for="name" class="block text-sm leading-6 text-gray-900 font-medium">Nama
                    Program Studi</label>
                <div class="mt-2">
                    <input name="nm_progdi" type="text"
                        class="block w-5/6  max-h-6 p-4 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                    @error('nm_progdi')
                        <div class="text-red-600">{{ 'Harap Diisi' }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-8 ml-7">
            <button type="submit" class="bg-blue-500 rounded p-2">Simpan</button>
        </div>
    </form>
</body>

</html>
