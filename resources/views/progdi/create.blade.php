<x-layout>
    <div class="flex justify-center pt-5">
        <h1 class="text-3xl">
            Data Program Studi
        </h1>
    </div>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('progdi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="nm_fakultas" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Fakultas
                    </label>
                    <input type="text" name="nm_fakultas" id="nm_fakultas" placeholder="Nama Fakultas"
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
                    <input type="text" name="nm_progdi" id="nm_progdi" placeholder="Nama Program Studi"
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
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
