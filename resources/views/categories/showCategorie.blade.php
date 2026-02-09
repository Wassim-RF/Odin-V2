@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex flex-col gap-4">
            <a href="/categories" class="flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-[#F59F0A] transition-colors w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="M12 19l-7-7 7-7"/></svg>
                Retour aux catégories
            </a>

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <h1 class="text-3xl font-bold text-[#0F172A] tracking-tight flex items-center gap-3">
                        <span class="w-3 h-8 bg-[#F59F0A] rounded-full inline-block"></span>
                        {{ $categorie->title }}
                    </h1>
                    <p class="text-[15px] font-medium text-slate-500 mt-2 ml-6">
                        {{ $categorie->description }}
                    </p>
                </div>
                
                <div class="flex gap-3">
                    <button data-id="{{ $categorie->id }}" data-title="{{ $categorie->title }}" data-description="{{ $categorie->description }}" class="px-5 py-2.5 bg-white border border-gray-200 text-slate-600 rounded-xl hover:bg-slate-50 font-bold transition-all shadow-sm editCategorie_Modal_button">
                        Modifier la catégorie
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="relative w-full md:w-96">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        id="searchLink" 
                        placeholder="Rechercher par titre ou URL..." 
                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#F59F0A] focus:border-transparent sm:text-sm transition-all"
                    >
                </div>

                <div class="text-sm font-medium text-slate-500">
                    <span id="resultsCount" class="text-[#0F172A] font-bold">{{ $categorie->links->count() }}</span> liens enregistrés
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    Filtrer par tags
                </label>
                <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-1.5 rounded-lg text-sm font-semibold transition-all bg-[#F59F0A] text-white border border-[#F59F0A]">
                        Tous
                    </button>
                    
                    @foreach($categorie->links->flatMap->tags->unique('id') as $tag)
                        <button class="px-4 py-1.5 rounded-lg text-sm font-semibold transition-all bg-white text-slate-600 border border-gray-200 hover:border-[#F59F0A] hover:text-[#F59F0A]">
                            #{{ $tag->name }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($categorie->links as $link)
                <div class="group relative bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md hover:border-[#1B294B] transition-all flex flex-col justify-between h-full">
                    <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity z-10">
                        <button title="Modifier" data-id="{{ $link->id }}" data-title="{{ $link->title }}" data-url="{{ $link->url }}" data-categories_id="{{ $link->categories_id }}"  data-tags='@json($link->tags->pluck("id"))' class="p-1.5 bg-slate-50 hover:bg-[#F1F2F4] text-slate-400 hover:text-[#1B294B] rounded-lg transition-colors border border-gray-100 editLink_Modal_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </button>
                        <form action="{{ route('delete.link') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="link_id" value="{{ $link->id }}">
                            <button title="Supprimer" type="submit" class="p-1.5 bg-slate-50 hover:bg-red-50 text-slate-400 hover:text-red-600 rounded-lg transition-colors border border-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </form>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold text-[#0F172A] truncate pr-16">{{ $link->title }}</h3> 
                        <a href="{{ $link->url }}" target="_blank" class="text-xs text-slate-400 hover:text-[#1B294B] truncate block transition-colors mb-4">{{ $link->url }}</a>
                        
                        <div class="flex flex-wrap gap-2">
                            @foreach ($link->tags as $tag)
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#F1F2F4] text-[#1B294B] border border-slate-200">
                                    #{{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ $link->url }}" target="_blank" class="mt-auto w-full flex items-center justify-center gap-2 py-2.5 rounded-xl bg-[#F1F2F4] text-[#1B294B] text-sm font-bold hover:bg-[#1B294B] hover:text-white transition-all group-hover:shadow-sm">
                        Visiter le lien
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                    </a>
                </div>
            @endforeach

            <button type="button" id="addLien_Modal_button" class="group h-full min-h-[220px] border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center p-6 hover:border-[#F59F0A] hover:bg-orange-50/30 transition-all cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-sm mb-3 group-hover:scale-110 transition-transform">
                    <span class="text-[#F59F0A] font-bold text-2xl">+</span>
                </div>
                <span class="text-sm font-bold text-slate-600 group-hover:text-[#F59F0A] transition-colors">Ajouter un lien</span>
            </button>
        </div>
        
        @include('modales.addLinks')
        @include('modales.editCategorie')
        @include('modales.editLink')

    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>