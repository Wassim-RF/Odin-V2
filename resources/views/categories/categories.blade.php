@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 py-6">
            <div class="relative">
                <div class="flex items-center gap-3">
                    <div class="h-8 w-1.5 rounded-full bg-[#F59F0A]"></div>
                    <h1 class="text-3xl font-black tracking-tight text-slate-900">Mes Catégories</h1>
                </div>
                <p class="mt-1 ml-4 text-[11px] font-bold uppercase tracking-[0.2em] text-slate-400/80">
                    Structure & Architecture
                </p>
            </div>
            <form method="GET" action="{{ route('categories.index') }}" class="relative w-full md:w-96 group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400 group-focus-within:text-[#F59F0A] transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input 
                    type="search" 
                    name="search"
                    id="searchCategory"
                    value="{{ request('search') }}" 
                    placeholder="Trouver un dossier..." 
                    class="block w-full pl-12 pr-4 py-3.5 border border-slate-200 rounded-2xl bg-white placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-amber-500/10 focus:border-[#F59F0A] sm:text-sm font-medium transition-all shadow-[0_4px_20px_rgba(0,0,0,0.03)]"
                >
            </form>
        </div>

        <div id="categoriesGrid" class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach ($categories as $categorie)
                <div class="category-card group relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] rounded-4xl p-8 hover:shadow-[0_20px_40px_rgba(245,159,10,0.08)] hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-6 right-6 flex gap-2 opacity-0 group-hover:opacity-100 translate-y-2.5 group-hover:translate-y-0 transition-all duration-300">
                        <button title="Modifier" 
                            data-id="{{ $categorie->id }}" data-title="{{ $categorie->title }}" data-description="{{ $categorie->description }}" 
                            class="editCategorie_Modal_button p-2 bg-white text-slate-400 hover:text-[#F59F0A] rounded-xl border border-slate-100 shadow-sm transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                        <form action="{{ route('delete.categorie') }}" method="POST" onsubmit="return confirm('Supprimer cette catégorie ?')">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="categorie_id" value="{{ $categorie->id }}">
                            <button title="Supprimer" class="p-2 bg-white text-slate-400 hover:text-red-600 rounded-xl border border-slate-100 shadow-sm transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="w-14 h-14 bg-amber-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#F59F0A] group-hover:rotate-6 transition-all duration-500 shadow-sm group-hover:shadow-amber-900/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#F59F0A] group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="category-title text-xl font-black text-slate-900 tracking-tight leading-tight uppercase group-hover:text-[#F59F0A] transition-colors">
                            {{ $categorie->title }}
                        </h3>
                        <div class="flex items-center gap-2">
                            <span class="h-1 w-4 bg-amber-200 rounded-full group-hover:w-8 transition-all duration-500"></span>
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                {{ $categorie->links_count ?? 0 }} Liens
                            </p>
                        </div>
                    </div>
                    <a href="/categorie/{{ $categorie->id }}" class="mt-8 flex items-center justify-between py-3 border-t border-slate-50 group-hover:border-amber-50 text-[#F59F0A] font-black text-xs uppercase tracking-widest transition-all">
                        <span>Explorer le dossier</span>
                        <span class="translate-x-0 group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>
            @endforeach
            <button type="button" id="addCategorie_Modal_button" 
                class="group relative w-full min-h-[260px] border-2 border-dashed border-slate-200 rounded-4xl flex flex-col items-center justify-center p-8 hover:border-[#F59F0A] hover:bg-amber-50/30 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#F59F0A] group-hover:text-white transition-all duration-500 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <span class="text-sm font-black uppercase tracking-widest text-slate-500 group-hover:text-[#F59F0A]">Nouveau Dossier</span>
            </button>
        </div>

        @include('modales.addCategories')
        @include('modales.editCategorie')
    </main>

    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>