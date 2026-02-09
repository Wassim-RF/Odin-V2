@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 py-6">
            <div class="relative">
                <div class="flex items-center gap-3">
                    <div class="h-8 w-1.5 rounded-full bg-[#21C45D]"></div>
                    <h1 class="text-3xl font-black tracking-tight text-slate-900">Mes Tags</h1>
                </div>
                <p class="mt-1 ml-4 text-[11px] font-bold uppercase tracking-[0.2em] text-slate-400/80">
                    Système d'organisation
                </p>
            </div>
            <div class="relative w-full md:w-96 group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400 group-focus-within:text-[#21C45D] transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input 
                    type="text" 
                    id="searchTagInput" 
                    placeholder="Rechercher un tag spécifique..." 
                    class="block w-full pl-12 pr-4 py-3.5 border border-slate-200 rounded-2xl bg-white placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-[#21C45D] sm:text-sm font-medium transition-all shadow-[0_4px_20px_rgba(0,0,0,0.03)]"
                >
            </div>
        </div>

        <div id="tagsGrid" class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach (auth()->user()->tags as $tag)
                <div class="tag-card group relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] rounded-4xl p-8 hover:shadow-[0_20px_40px_rgba(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                        <form action="{{ route('delete.tag') }}" method="POST" onsubmit="return confirm('Supprimer ce tag ?')">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="tag_id" value="{{ $tag->id }}">
                            <button title="Supprimer le tag" type="submit" 
                                class="p-2.5 bg-red-50 text-red-500 hover:bg-red-500 hover:text-white rounded-xl transition-all border border-red-50 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#21C45D] group-hover:rotate-12 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#21C45D] group-hover:text-white transition-colors" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/>
                                <path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/>
                            </g>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="tag-name text-xl font-black text-slate-900 tracking-tight">
                            <span class="text-[#21C45D]/50 text-lg">#</span>{{ $tag->name }}
                        </h3>
                        
                        <div class="flex items-center gap-2">
                            <div class="flex -space-x-1">
                                <div class="h-2 w-2 rounded-full bg-green-400"></div>
                            </div>
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                {{ $tag->links()->count() }} {{ $tag->links()->count() > 1 ? 'liens' : 'lien' }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-1 bg-[#21C45D] rounded-t-full group-hover:w-1/3 transition-all duration-500"></div>
                </div>
            @endforeach
            <button id="addTag_Modal_button" 
                class="group relative w-full min-h-[220px] border-2 border-dashed border-slate-200 rounded-4xl flex flex-col items-center justify-center p-8 hover:border-[#21C45D] hover:bg-green-50/30 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#21C45D] group-hover:text-white transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <span class="text-sm font-black uppercase tracking-widest text-slate-500 group-hover:text-[#21C45D]">Nouveau Tag</span>
            </button>
        </div>

    </main>

    @include('modales.addTag')

    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>