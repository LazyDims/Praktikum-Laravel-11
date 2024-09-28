<x-layout>
    <div class="flex justify-center pt-5">
        <h1 class="text-3xl">
            Data Pribadi
        </h1>
    </div>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('pribadi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="nik" class="mb-3 block text-base font-medium text-[#07074D]">
                                NIK
                            </label>
                            <input type="number" name="nik" id="nik" placeholder="Max 12 Angka"
                                maxlength="12" minlength="12"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('nik')
                                <div class="mb-3 block text-base font-medium text-red-700">
                                    Harap Diisi Dengan Benar
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="nama_mhs" class="mb-3 block text-base font-medium text-[#07074D]">
                                Nama Mahasiswa
                            </label>
                            <input type="text" name="nama_mhs" id="nama_mhs" placeholder="Nama Mahasiswa"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('nama_mhs')
                                <div class="mb-3 block text-base font-medium text-red-700">
                                    Harap Diisi Dengan Benar
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="tempat_lahir" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tempat Lahir
                            </label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('tempat_lahir')
                                <div class="mb-3 block text-base font-medium text-red-700">
                                    Harap Diisi Dengan Benar
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tanggal Lahir
                            </label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('tanggal_lahir')
                                <div class="mb-3 block text-base font-medium text-red-700">
                                    Harap Diisi Dengan Benar
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" flex justify-between pt-4">
                    <a href="{{ route('pribadi.index') }}"
                        class="hover:shadow-form rounded-md bg-[#f02525] py-3 px-8 text-center text-base font-semibold text-white outline-none">Back</a>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
