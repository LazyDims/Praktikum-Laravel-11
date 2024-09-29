<x-layout>
    <h1 class="text-3xl flex justify-center py-5 mx-5">
        Daftar Ulang Mahasiswa
    </h1>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="id_pri" class="mb-3 block text-base font-medium text-[#07074D]">
                                Program Studi
                            </label>
                            <select name="id_progdi" required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option disabled>Pilih Program Studi</option>
                                @foreach ($progdi as $pro)
                                    <option value="{{ $pro->id_progdi }}">
                                        {{ $pro->nm_progdi }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="nim" class="mb-3 block text-base font-medium text-[#07074D]">
                                NIM
                            </label>
                            <input type="text" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa"
                                required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                        </div>
                    </div>
                </div>
                @foreach ($pribadi as $p)
                    <input type="hidden" name="id_pribadi" id="id_pribadi" value="{{ $p->id_pribadi }}">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="nik" class="mb-3 block text-base font-medium text-[#07074D]">
                                    NIK
                                </label>
                                <input type="text" name="nik" id="nik" value="{{ $p->nik }}" readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="nama_mhs" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nama Mahasiswa
                                </label>
                                <input type="text" name="nama_mhs" id="nama_mhs" value="{{ $p->nama_mhs }}"
                                    readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="tempat_lahir" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Tempat Lahir
                                </label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" readonly
                                    value="{{ $p->tempat_lahir }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Tanggal Lahir
                                </label>
                                <input type="date" name="date" id="date" value="{{ $p->tanggal_lahir }}"
                                    readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            </div>
                        </div>
                    </div>
                    <div class=" flex justify-between pt-4">
                        <a href="{{ route('mahasiswa.index') }}"
                            class="hover:shadow-form rounded-md bg-[#f02525] py-3 px-8 text-center text-base font-semibold text-white outline-none">Back</a>
                        <button type="submit"
                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Daftar
                        </button>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
    </form>
</x-layout>
