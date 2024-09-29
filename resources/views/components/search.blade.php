<div class="container mx-auto">
    <div class="w-full max-w-md mb- 8">
        <div class="relative bg-white rounded">
            <form action="{{ route('search') }}" method="GET">
                <input
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Search..." />
                <button
                    class="absolute top-1 right-1 flex items-center rounded bg-slate-800 py-1 px-2.5 border border-white text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
</div>
