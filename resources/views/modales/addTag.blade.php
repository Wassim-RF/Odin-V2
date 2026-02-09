<div class="fixed inset-0 hidden items-center justify-center bg-slate-900/60 backdrop-blur-md z-50 transition-all duration-300" id="modale_addTag_pop">
    
    <form action="{{ route('create.tag') }}" method="POST" id="tag_form" 
        class="w-[400px] mx-auto bg-white rounded-4xl shadow-[0_20px_50px_rgba(0,0,0,0.2)] overflow-hidden border border-slate-100 transform transition-all duration-300">
        @csrf
        
        <div class="px-8 py-6 border-b border-slate-50 bg-slate-50/30">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-50 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/>
                        <path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-black tracking-tight text-slate-900">Nouveau Tag</h3>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400">Étiquetez vos ressources</p>
                </div>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <div class="space-y-2">
                <label for="tag_name" class="flex items-center gap-2 text-sm font-black text-slate-700">
                    <span>Nom du Tag</span>
                    <span class="h-1 w-1 rounded-full bg-green-500"></span>
                </label>
                <div class="relative group">
                    <input type="text" id="tag_name" name="tag_name" required
                        class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 pl-10 pr-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-green-500 focus:ring-4 focus:ring-green-500/10 transition-all outline-none text-sm font-medium" 
                        placeholder="Ex: Laravel">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold group-focus-within:text-green-500 transition-colors">#</span>
                </div>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button id="annuler_addTag_Button" type="button" 
                    class="flex-1 px-6 py-3.5 text-sm font-bold text-slate-500 bg-slate-100 rounded-2xl hover:bg-slate-200 hover:text-slate-700 transition-all active:scale-95">
                    Annuler
                </button>
                <button type="submit" 
                    class="flex-2 bg-[#1B294B] text-white py-3.5 rounded-2xl font-black text-sm tracking-wide hover:bg-slate-800 shadow-lg shadow-slate-200 active:scale-95 transition-all">
                    Enregistrer
                </button>
            </div>
        </div>
    </form>
</div>