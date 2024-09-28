<nav class="bg-emerald-200 shadow dark:bg-emerald-200">
    <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('progdi.index')" :active="request()->routeIs('progdi.index')">
                {{ __('Data Program Studi') }}
            </x-nav-link>
            <x-nav-link :href="route('pribadi.index')" :active="request()->routeIs('pribadi.index')">
                {{ __('Data Pribadi') }}
            </x-nav-link>
            <x-nav-link :href="route('mahasiswa.index')" :active="request()->routeIs('mahasiswa.index')">
                {{ __('Data Mahasiswa') }}
            </x-nav-link>
        </div>
    </div>
</nav>
