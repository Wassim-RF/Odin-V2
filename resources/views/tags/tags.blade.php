@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#0F172A] tracking-tight">Mes Tags</h1>
                <p class="text-[15px] font-medium text-slate-500">Gérez vos étiquettes d'organisation</p>
            </div>

            <div class="relative w-full md:w-80">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input 
                    type="text" 
                    id="searchTagInput" 
                    placeholder="Rechercher un tag..." 
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl leading-5 bg-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#21C45D] focus:border-transparent sm:text-sm transition-all shadow-sm"
                >
            </div>
        </div>

        <div id="tagsGrid" class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach (auth()->user()->tags as $tag)
                <div class="tag-card group relative bg-white border border-gray-200 shadow-sm rounded-2xl p-6 hover:shadow-md transition-all">
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <form action="{{ route('delete.tag') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="tag_id" value="{{ $tag->id }}">
                            <button title="Supprimer le tag" type="submit" class="p-1.5 bg-red-50 text-red-500 hover:bg-red-100 rounded-lg transition-colors border border-red-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </form>
                    </div>

                    <div class="w-10 h-10 bg-[#E8F9EE] rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <g fill="none" stroke="#21C45D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/>
                                <path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/>
                            </g>
                        </svg>
                    </div>

                    <div class="space-y-1">
                        <h3 class="tag-name text-lg font-bold text-[#0F172A] tracking-tight">{{ $tag->name }}</h3>
                        <p class="text-[13px] font-medium text-slate-400">{{ $tag->links()->count() }} liens associés</p>
                    </div>
                </div>
            @endforeach

            <button id="addTag_Modal_button" class="w-full h-full border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center p-8 hover:border-[#21C45D] hover:bg-[#E8F9EE]/30 transition-all cursor-pointer group">
                <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm mb-3 group-hover:scale-110 transition-transform">
                    <span class="text-[#21C45D] font-bold text-xl">+</span>
                </div>
                <span class="text-sm font-bold text-slate-600">Nouveau Tag</span>
            </button>
        </div>

    </main>

    @include('modales.addTag')

    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>