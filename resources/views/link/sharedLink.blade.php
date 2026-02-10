@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-10 p-[5%]">
        
        {{-- Header & Switcher --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="relative">
                <div class="flex items-center gap-3">
                    <div class="h-8 w-1.5 rounded-full bg-[#1B294B]"></div>
                    <h1 class="text-3xl font-black tracking-tight text-slate-900">Collaboration</h1>
                </div>
                <p class="mt-1 ml-4 text-sm font-bold uppercase tracking-[0.15em] text-slate-400/80">
                    Flux des liens partagés
                </p>
            </div>

            <div class="flex bg-slate-200/60 p-1.5 rounded-2xl w-fit border border-slate-100 shadow-sm">
                <button id="tab-recus" onclick="showTab('recus')" 
                    class="px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all bg-[#1B294B] text-white shadow-lg">
                    📥 Reçus
                </button>
                <button id="tab-envoyes" onclick="showTab('envoyes')" 
                    class="px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all text-slate-500 hover:text-slate-800">
                    📤 Envoyés
                </button>
            </div>
        </div>

        <div class="relative">
            
            {{-- Section 1: REÇUS --}}
            <div id="section-recus" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7 transition-all duration-300">
                
                <div class="group relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] rounded-4xl p-6 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300">
                    
                    {{-- Badge "De:" --}}
                    <div class="absolute -top-3 left-6 z-30">
                        <span class="bg-indigo-600 text-white text-[10px] font-black px-4 py-1.5 rounded-full shadow-lg shadow-indigo-200 uppercase tracking-widest">
                            De: Amine Dev
                        </span>
                    </div>

                    <div class="absolute top-5 right-5 z-20 flex flex-col gap-2">
                        <form action="#" method="POST">
                            @csrf
                            <button title="Favoris" class="p-2 rounded-xl border transition-all bg-slate-50 border-slate-100 text-slate-400 hover:text-red-500 hover:bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                                </svg>
                            </button>
                        </form>
                        <div class="flex flex-col gap-2 opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <button title="Modifier" class="editLink_Modal_button p-2 bg-[#1B294B] text-white rounded-xl shadow-lg hover:bg-blue-800 transition-all">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            </button>
                            <button title="Supprimer" class="p-2 bg-white text-slate-400 hover:text-red-600 hover:bg-red-50 border border-slate-100 rounded-xl transition-all">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </button>
                        </div>
                    </div>

                    <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#1B294B] group-hover:rotate-6 transition-all duration-500">
                        <svg class="h-7 w-7 text-[#1B294B] group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg font-black text-slate-900 truncate pr-10">Interface Design Kit</h3>
                        <p class="text-[13px] font-bold text-slate-400 truncate tracking-tight">figma.com/community</p>
                    </div>

                    <a href="#" target="_blank" class="mt-6 flex items-center justify-between py-3 border-t border-slate-50 group-hover:border-blue-50 text-[#1B294B] font-black text-xs uppercase tracking-widest hover:text-blue-600 transition-all">
                        <span>Visiter le lien</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            {{-- Section 2: ENVOYÉS --}}
            <div id="section-envoyes" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7 transition-all duration-300">
                
                <div class="group relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] rounded-4xl p-6 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300">
                    
                    {{-- Badge "À:" --}}
                    <div class="absolute -top-3 left-6 z-30">
                        <span class="bg-emerald-500 text-white text-[10px] font-black px-4 py-1.5 rounded-full shadow-lg shadow-emerald-100 uppercase tracking-widest">
                            À: Omar Dev
                        </span>
                    </div>

                    <div class="absolute top-5 right-5 z-20 flex flex-col gap-2">
                        <div class="flex flex-col gap-2 opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <button title="Modifier" class="p-2 bg-[#1B294B] text-white rounded-xl shadow-lg hover:bg-blue-800 transition-all">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            </button>
                            <button title="Supprimer" class="p-2 bg-white text-slate-400 hover:text-red-600 hover:bg-red-50 border border-slate-100 rounded-xl transition-all">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </button>
                        </div>
                    </div>

                    <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:rotate-6 transition-all duration-500">
                        <svg class="h-7 w-7 text-emerald-600 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                        </svg>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg font-black text-slate-900 truncate pr-10">Laravel API Tools</h3>
                        <p class="text-[13px] font-bold text-slate-400 truncate tracking-tight">laravel.com/docs</p>
                    </div>

                    <a href="#" target="_blank" class="mt-6 flex items-center justify-between py-3 border-t border-slate-50 group-hover:border-emerald-50 text-[#1B294B] font-black text-xs uppercase tracking-widest hover:text-emerald-600 transition-all">
                        <span>Visiter le lien</span>
                        <span>→</span>
                    </a>
                </div>

            </div>
        </div>

    </main>

    <script>
        function showTab(tabName) {
            const sectionRecus = document.getElementById('section-recus');
            const sectionEnvoyes = document.getElementById('section-envoyes');
            const btnRecus = document.getElementById('tab-recus');
            const btnEnvoyes = document.getElementById('tab-envoyes');

            if (tabName === 'recus') {
                sectionRecus.classList.remove('hidden');
                sectionEnvoyes.classList.add('hidden');
                btnRecus.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all bg-[#1B294B] text-white shadow-lg";
                btnEnvoyes.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all text-slate-500 hover:text-slate-800";
            } else {
                sectionEnvoyes.classList.remove('hidden');
                sectionRecus.classList.add('hidden');
                btnEnvoyes.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all bg-[#1B294B] text-white shadow-lg";
                btnRecus.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all text-slate-500 hover:text-slate-800";
            }
        }
    </script>
</body>