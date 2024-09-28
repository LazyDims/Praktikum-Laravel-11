<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Edit Data Progdi' }} </title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center pt-5">
        <h1 class="text-3xl">
            Data Program Studi
        </h1>
    </div>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('progdi.update', $progdi->id_progdi) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="nm_fakultas" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Fakultas
                    </label>
                    <input type="text" name="nm_fakultas" id="nm_fakultas" value="{{ $progdi->nm_fakultas }}"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('nm_fakultas')
                        <div class="mb-3 block text-base font-medium text-red-700">
                            Harap Diisi Dengan Benar
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="nm_progdi" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Program Studi
                    </label>
                    <input type="text" name="nm_progdi" id="nm_progdi" value="{{ $progdi->nm_progdi }}"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('nm_progdi')
                        <div class="mb-3 block text-base font-medium text-red-700">
                            Harap Diisi Dengan Benar
                        </div>
                    @enderror
                </div>
                <div class="flex justify-between pt-4">
                    <a href="{{ route('progdi.index') }}"
                        class="hover:shadow-form rounded-md bg-[#f02525] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Back</a>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
