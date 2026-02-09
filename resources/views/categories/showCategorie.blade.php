@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
       <div class="flex flex-col gap-8 py-6">
    {{-- Back Button --}}
    <a href="/categories" class="group flex items-center gap-2.5 text-xs font-black uppercase tracking-[0.2em] text-slate-400 hover:text-[#F59F0A] transition-all w-fit">
        <div class="flex items-center justify-center w-8 h-8 rounded-xl bg-white border border-slate-100 shadow-sm group-hover:border-amber-100 group-hover:bg-amber-50 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </div>
        Retour aux dossiers
    </a>

    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
        {{-- Title & Meta --}}
        <div class="space-y-4">
            <div class="flex items-center gap-4">
                {{-- Folder Icon Accent --}}
                <div class="flex items-center justify-center w-14 h-14 bg-amber-50 rounded-[1.25rem] border border-amber-100/50 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#F59F0A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                </div>
                <h1 class="text-4xl font-black text-slate-900 tracking-tight uppercase">
                    {{ $categorie->title }}
                </h1>
            </div>

            {{-- Description with line accent --}}
            <div class="relative pl-6">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-[#F59F0A] to-amber-100 rounded-full"></div>
                <p class="text-lg font-bold text-slate-500 max-w-2xl leading-relaxed">
                    {{ $categorie->description ?? "Aucune description pour ce dossier." }}
                </p>
                {{-- Stats Badge --}}
                <div class="mt-3 flex items-center gap-2">
                    <span class="px-3 py-1 bg-slate-100 text-slate-500 text-[10px] font-black uppercase tracking-widest rounded-lg">
                        {{ $categorie->links()->count() }} Liens au total
                    </span>
                </div>
            </div>
        </div>
        
        {{-- Quick Actions --}}
        <div class="flex items-center gap-3">
            <button data-id="{{ $categorie->id }}" data-title="{{ $categorie->title }}" data-description="{{ $categorie->description }}" 
                class="editCategorie_Modal_button flex items-center gap-2 px-6 py-3.5 bg-[#1B294B] text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-slate-800 transition-all active:scale-95 shadow-xl shadow-blue-900/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Gérer
            </button>
        </div>
    </div>
</div>

       <div class="flex flex-col gap-8 bg-white p-8 rounded-[2rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] transition-all">
    
    {{-- Top Bar: Search & Results --}}
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
        {{-- Search Input --}}
        <div class="relative w-full lg:w-1/2 group">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-slate-400 group-focus-within:text-[#F59F0A] transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input 
                type="text" 
                id="searchLink" 
                placeholder="Chercher dans ce dossier..." 
                class="block w-full pl-12 pr-4 py-3.5 border border-slate-200 rounded-2xl bg-slate-50/50 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-amber-500/5 focus:border-[#F59F0A] focus:bg-white sm:text-sm font-bold transition-all"
            >
        </div>

        {{-- Results Count Badge --}}
        <div class="flex items-center gap-3 px-4 py-2 bg-amber-50 rounded-xl border border-amber-100/50">
            <span id="resultsCount" class="text-[#F59F0A] font-black text-lg leading-none">
                {{ $categorie->links->count() }}
            </span>
            <span class="text-[10px] font-black uppercase tracking-widest text-amber-900/40">
                Liens trouvés
            </span>
        </div>
    </div>

    {{-- Separator --}}
    <div class="h-px bg-linear-to-r from-transparent via-slate-100 to-transparent"></div>

    {{-- Tags Filter Section --}}
    <div class="space-y-4">
        <label class="text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#F59F0A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            Explorer par étiquette
        </label>
        
        <div class="flex flex-wrap gap-2.5">
            {{-- All Button --}}
            <button class="px-6 py-2.5 rounded-xl text-xs font-black uppercase tracking-wider transition-all bg-[#F59F0A] text-white shadow-lg shadow-amber-500/20 active:scale-95">
                Tous
            </button>
            
            {{-- Tag Pills --}}
            @foreach($categorie->links->flatMap->tags->unique('id') as $tag)
                <button class="px-5 py-2.5 rounded-xl text-xs font-black uppercase tracking-wider transition-all bg-white text-slate-600 border border-slate-200 hover:border-[#F59F0A] hover:text-[#F59F0A] hover:shadow-sm active:scale-95">
                    #{{ $tag->name }}
                </button>
            @endforeach
        </div>
    </div>
</div>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
    @foreach ($categorie->links as $link)
        <div class="group relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] rounded-[2rem] p-7 hover:shadow-[0_20px_40px_rgba(245,159,10,0.08)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col h-full">
            
            {{-- Action Buttons (Top Right) --}}
            <div class="absolute top-5 right-5 flex gap-2 opacity-0 group-hover:opacity-100 translate-y-[-10px] group-hover:translate-y-0 transition-all duration-300 z-10">
                <button title="Modifier" 
                    data-id="{{ $link->id }}" data-title="{{ $link->title }}" data-url="{{ $link->url }}" data-categories_id="{{ $link->categories_id }}" data-tags='@json($link->tags->pluck("id"))' 
                    class="editLink_Modal_button p-2 bg-white/90 backdrop-blur-sm text-slate-400 hover:text-[#F59F0A] rounded-xl border border-slate-100 shadow-sm transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </button>
                <form action="{{ route('delete.link') }}" method="POST" onsubmit="return confirm('Supprimer ce lien ?')">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="link_id" value="{{ $link->id }}">
                    <button title="Supprimer" type="submit" class="p-2 bg-white/90 backdrop-blur-sm text-slate-400 hover:text-red-500 rounded-xl border border-slate-100 shadow-sm transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
            </div>

            {{-- Favicon/Icon Placeholder --}}
            <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-amber-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-400 group-hover:text-[#F59F0A] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                </svg>
            </div>

            <div class="mb-6 flex-grow">
                <h3 class="text-xl font-black text-slate-900 tracking-tight truncate pr-10 mb-1">
                    {{ $link->title }}
                </h3> 
                <p class="text-[11px] font-bold text-slate-400 truncate mb-4 uppercase tracking-widest opacity-70">
                    {{ parse_url($link->url, PHP_URL_HOST) }}
                </p>
                
                {{-- Tags --}}
                <div class="flex flex-wrap gap-2">
                    @foreach ($link->tags as $tag)
                        <span class="inline-flex items-center px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider bg-slate-50 text-slate-500 border border-slate-100 group-hover:bg-white group-hover:border-amber-100 group-hover:text-[#F59F0A] transition-all">
                            #{{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Visit Button --}}
            <a href="{{ $link->url }}" target="_blank" 
                class="w-full flex items-center justify-center gap-3 py-4 rounded-2xl bg-slate-900 text-white text-xs font-black uppercase tracking-[0.15em] hover:bg-[#F59F0A] hover:shadow-lg hover:shadow-amber-500/20 transition-all active:scale-[0.98]">
                Visiter
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
    @endforeach

    {{-- Add Link Button --}}
    <button type="button" id="addLien_Modal_button" 
        class="group relative h-full min-h-[280px] border-2 border-dashed border-slate-200 rounded-[2rem] flex flex-col items-center justify-center p-8 hover:border-[#F59F0A] hover:bg-amber-50/30 transition-all duration-500 cursor-pointer">
        <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center shadow-sm mb-4 group-hover:scale-110 group-hover:bg-[#F59F0A] group-hover:text-white transition-all duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </div>
        <span class="text-sm font-black uppercase tracking-widest text-slate-400 group-hover:text-[#F59F0A] transition-colors">Ajouter un lien</span>
    </button>
</div>
        
        @include('modales.addLinks')
        @include('modales.editCategorie')
        @include('modales.editLink')

    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>