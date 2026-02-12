@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex items-center justify-between py-6">
            <div class="relative">
                <div class="flex items-center gap-3">
                    <div class="h-8 w-1.5 rounded-full bg-[#1B294B]"></div>
                    <h1 class="text-3xl font-black tracking-tight text-slate-900">Mes Liens</h1>
                </div>
                <p class="mt-1 ml-4 text-sm font-bold uppercase tracking-[0.15em] text-slate-400/80">
                    Votre bibliothèque digitale
                </p>
            </div>
        </div>

        <form method="GET" action="{{ route('links.index') }}" class="flex flex-col gap-6 bg-white p-8 rounded-4xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                <div class="relative w-full lg:w-1/3 group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400 group-focus-within:text-[#1B294B] transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Rechercher..."
                        class="block w-full pl-12 pr-4 py-3.5 border border-slate-200 rounded-2xl bg-slate-50/50 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-blue-900/5 focus:border-[#1B294B] focus:bg-white sm:text-sm font-medium transition-all"
                    >
                </div>

                <div class="flex flex-wrap items-center gap-4 lg:gap-6">
                    <div class="flex items-center gap-3 bg-slate-50/80 p-1.5 rounded-2xl border border-slate-100">
                        <a href="{{ route('links.index', array_merge(request()->query(), ['favorites' => request('favorites') ? null : '1'])) }}" 
                            class="flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-black uppercase tracking-widest transition-all {{ request('favorites') ? 'bg-red-500 text-white shadow-lg shadow-red-200' : 'bg-white text-slate-400 hover:text-slate-600 shadow-sm' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="{{ request('favorites') ? 'currentColor' : 'none' }}" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                            </svg>
                            <span>Favoris</span>
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[10px] font-black uppercase tracking-widest text-slate-400 hidden sm:block">Dossier:</span>
                        <div class="relative w-48">
                            <select name="category" onchange="this.form.submit()"
                                class="appearance-none block w-full bg-slate-50/50 border border-slate-200 text-slate-700 font-bold text-sm rounded-2xl focus:ring-4 focus:ring-blue-900/5 focus:border-[#1B294B] p-3 pr-10 outline-none transition-all cursor-pointer">
                                <option value="all">Tous</option>
                                @foreach(auth()->user()->categories as $cat)
                                    <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->title }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h-px bg-linear-to-r from-transparent via-slate-100 to-transparent"></div>
            <div class="space-y-4">
                <label class="text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    Tags
                </label>
                
                <div class="flex flex-wrap gap-2.5">
                    <a href="{{ route('links.index', request()->except('tag')) }}" 
                        class="px-5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all {{ !request('tag') ? 'bg-[#1B294B] text-white shadow-lg' : 'bg-slate-100 text-slate-500 hover:bg-slate-200' }}">
                        Tous
                    </a>
                    @foreach(auth()->user()->links()->with('tags')->get()->flatMap->tags->unique('id') as $tag)
                        <a href="{{ route('links.index', array_merge(request()->query(), ['tag' => $tag->id])) }}"
                            class="px-5 py-2 rounded-xl text-xs font-black uppercase tracking-wider transition-all {{ request('tag') == $tag->id ? 'bg-[#1B294B] text-white shadow-lg' : 'bg-white text-slate-600 border border-slate-200 hover:border-[#1B294B]' }}">
                            #{{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </form>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach ($links as $link)
                <div class="group relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] rounded-4xl p-6 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-5 right-5 z-20 flex flex-col gap-2">
                        <form action="{{ route('links.favorite') }}" method="POST">
                            @csrf
                            <input type="hidden" name="link_id" value="{{ $link->id }}">
                            <button title="Favoris" type="submit" 
                                class="p-2 rounded-xl border transition-all {{ $link->favoredByUsers->contains(auth()->user()->id) ? 'bg-red-50 border-red-100 text-red-500 shadow-sm' : 'bg-slate-50 border-slate-100 text-slate-400 hover:text-red-500 hover:bg-white' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="{{ $link->favoredByUsers->contains(auth()->user()->id) ? 'currentColor' : 'none' }}" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                                </svg>
                            </button>
                        </form>

                        <div class="flex flex-col gap-2 opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <button title="Partager"
                                data-title="{{ $link->title }}"
                                data-url="{{ $link->url }}"
                                data-id="{{ $link->id }}"
                                class="shareLink_Modal_button p-2 bg-white text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 border border-slate-100 rounded-xl transition-all shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                </svg>
                            </button>

                            <button title="Modifier" 
                                data-id="{{ $link->id }}" data-title="{{ $link->title }}" data-url="{{ $link->url }}" data-categories_id="{{ $link->categories_id }}" data-tags='@json($link->tags->pluck("id"))' 
                                class="editLink_Modal_button p-2 bg-[#1B294B] text-white rounded-xl shadow-lg shadow-blue-900/20 hover:bg-blue-800 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>

                            <form action="{{ route('delete.link') }}" method="POST" onsubmit="return confirm('Supprimer ce lien ?')">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="link_id" value="{{ $link->id }}">
                                <button title="Supprimer" type="submit" class="p-2 bg-white text-slate-400 hover:text-red-600 hover:bg-red-50 border border-slate-100 rounded-xl transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#1B294B] group-hover:rotate-6 transition-all duration-500 shadow-sm group-hover:shadow-blue-900/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#1B294B] group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-black text-slate-900 tracking-tight truncate pr-10">{{ $link->title }}</h3>
                        <div class="flex items-center gap-1.5 text-slate-400 group-hover:text-blue-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <p class="text-[13px] font-bold truncate tracking-tight">{{ preg_replace('(^https?://)', '', $link->url) }}</p>
                        </div>
                    </div>
                    <a href="{{ $link->url }}" target="_blank" class="mt-6 flex items-center justify-between py-3 border-t border-slate-50 group-hover:border-blue-50 text-[#1B294B] font-black text-xs uppercase tracking-widest hover:text-blue-600 transition-all">
                        <span>Visiter le lien</span>
                        <span class="translate-x-0 group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>
            @endforeach

            <button id="addLien_Modal_button" class="group relative w-full min-h-[260px] border-2 border-dashed border-slate-200 rounded-4xl flex flex-col items-center justify-center p-8 hover:border-[#1B294B] hover:bg-slate-50 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#1B294B] group-hover:text-white transition-all duration-500 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <span class="text-sm font-black uppercase tracking-widest text-slate-500 group-hover:text-[#1B294B]">Nouveau Lien</span>
            </button>
        </div>

        @include('modales.addLinks')
        @include('modales.editLink')
        @include('modales.shareLink')

    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>