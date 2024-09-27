<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>

</body>
<h2 class="text-2xl flex justify-center p-4">
    Tambah Data Mahasiswa
</h2>
<a href="{{ route('pribadi.index') }}"
    class="ml-7 text-white hover:text-black inline-block p-2 bg-blue-700 rounded">Kembali</a>
@if (session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
@endif
<form action="{{ route('pribadi.update', $pribadi->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mt-8 ml-7">
        <div class="col-span-4">
            <label for="name" class="block text-sm leading-6 text-gray-900 font-medium">NIK</label>
            <div class="mt-2">
                <input name="nik" type="text" maxlength="16" value="{{ $pribadi->nik }}"
                    class="block w-5/6  max-h-6 p-4 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                @error('nik')
                    <div class="text-red-600">{{ 'Harap Diisi' }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mt-8 ml-7">
        <div class="col-span-4">
            <label for="name" class="block text-sm leading-6 text-gray-900 font-medium">Nama
                Mahasiswa</label>
            <div class="mt-2">
                <input name="nama_mhs" type="text" value="{{ $pribadi->nama_mhs }}"
                    class="block w-5/6  max-h-6 p-4 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                @error('nama_mhs')
                    <div class="text-red-600">{{ 'Harap Diisi' }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mt-8 ml-7">
        <div class="col-span-4">
            <label for="name" class="block text-sm leading-6 text-gray-900 font-medium">Tempat Lahir</label>
            <div class="mt-2">
                <input name="tempat_lahir" type="text" value="{{ $pribadi->tempat_lahir }}"
                    class="block w-5/6  max-h-6 p-4 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                @error('tempat_lahir')
                    <div class="text-red-600">{{ 'Harap Diisi' }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mt-8 ml-7">
        <div class="col-span-4">
            <label for="name" class="block text-sm leading-6 text-gray-900 font-medium">Tanggal Lahir</label>
            <div class="mt-2">
                <input name="tanggal_lahir" type="date" value="{{ $pribadi->tanggal_lahir }}"
                    class="block w-5/6  max-h-6 p-4 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                @error('tanggal_lahir')
                    <div class="text-red-600">{{ 'Harap Diisi' }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mt-8 ml-7">
        <button type="submit" class="bg-blue-500 rounded p-2">Update</button>
    </div>
</form>

</html>
