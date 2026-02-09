@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#0F172A] tracking-tight">Mes Liens</h1>
                <p class="text-[15px] font-medium text-slate-500">Accédez à vos liens favoris</p>
            </div>
        </div>

        <form method="GET" action="{{ route('links.index') }}" class="flex flex-col gap-6 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="relative w-full md:w-96">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Rechercher un titre ou URL..."
                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#1B294B] focus:border-transparent sm:text-sm transition-all"
                    >
                </div>

                <div class="flex items-center gap-3">
                    <label class="text-sm font-bold text-slate-600">Catégorie:</label>
                    <select name="category" class="bg-slate-50 border border-gray-200 text-slate-600 text-sm rounded-xl focus:ring-[#1B294B] focus:border-[#1B294B] block w-full md:w-48 p-2.5 outline-none transition-all">
                        <option value="all">Toutes les catégories</option>
                        @foreach(auth()->user()->categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr class="border-gray-100">

            <div class="flex flex-col gap-3">
                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    Filtrer par tags
                </label>
                <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-1.5 rounded-lg text-sm font-semibold transition-all bg-[#1B294B] text-white border border-[#1B294B]">
                        Tous
                    </button>
                    @foreach(auth()->user()->links()->with('tags')->get()->flatMap->tags->unique('id') as $tag)
                        <a href="{{ route('links.index', ['tag' => $tag->id]) }}"
                        class="px-4 py-1.5 rounded-lg text-sm font-semibold transition-all {{ request('tag') == $tag->id ? 'bg-[#1B294B] text-white border border-[#1B294B]' : 'bg-white text-slate-600 border border-gray-200 hover:border-[#1B294B] hover:text-[#1B294B]' }}">
                            #{{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </form>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach ($links as $link)
                <div class="group relative bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-all cursor-pointer">
                    <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
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

                    <div class="w-10 h-10 bg-[#F1F2F4] rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#1B294B] transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1B294B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-colors">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-lg font-bold text-[#0F172A] tracking-tight truncate">{{ $link->title }}</h3>
                        <p class="text-[14px] font-medium text-slate-500 truncate">{{ $link->url }}</p>
                        <span class="inline-block mt-2 text-[10px] uppercase tracking-widest font-bold text-[#1B294B] bg-[#F1F2F4] px-2 py-0.5 rounded">
                            {{ $link->categorie->title ?? "No Categorie" }}
                        </span>
                    </div>

                    <a href="{{ $link->url }}" target="_blank" class="mt-4 flex items-center text-[#1B294B] font-bold text-xs hover:gap-2 transition-all">
                        Visiter le lien <span class="ml-1">→</span>
                    </a>
                </div>
            @endforeach

            <button id="addLien_Modal_button" class="w-full min-h-[200px] border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center p-6 hover:border-[#1B294B] hover:bg-slate-50 transition-all cursor-pointer group">
                <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm mb-3 group-hover:scale-110 transition-transform">
                    <span class="text-[#1B294B] font-bold text-xl">+</span>
                </div>
                <span class="text-sm font-bold text-slate-600">Nouveau Lien</span>
            </button>
        </div>

        @include('modales.addLinks')
        @include('modales.editLink')

    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>