<div class="fixed inset-0 hidden items-center justify-center bg-slate-900/60 backdrop-blur-md z-50 transition-all duration-300" id="modale_addCategorie_pop">
    
    <form action="{{ route('create.categorie') }}" method="POST" id="group_form" 
        class="w-[450px] mx-auto bg-white rounded-4xl shadow-[0_20px_50px_rgba(0,0,0,0.2)] overflow-hidden border border-slate-100 transform transition-all duration-300">
        @csrf
        
        <div class="px-8 py-6 border-b border-slate-50 bg-slate-50/30">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-50 text-amber-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 16 16" fill="currentColor">
                        <path d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-black tracking-tight text-slate-900">Nouvelle Catégorie</h3>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400">Structurez votre espace</p>
                </div>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <div class="space-y-2">
                <label for="categorie_title" class="flex items-center gap-2 text-sm font-black text-slate-700">
                    <span>Nom de la catégorie</span>
                    <span class="h-1 w-1 rounded-full bg-amber-500"></span>
                </label>
                <input type="text" id="categorie_title" name="categorie_title" required
                    class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-amber-400 focus:ring-4 focus:ring-amber-400/10 transition-all outline-none text-sm font-medium" 
                    placeholder="Ex: Projets Freelance">
            </div>

            <div class="space-y-2">
                <label for="categorie_description" class="flex items-center gap-2 text-sm font-black text-slate-700">
                    <span>Description</span>
                    <span class="text-[10px] font-bold text-slate-300 uppercase leading-none">(Optionnel)</span>
                </label>
                <textarea id="categorie_description" name="categorie_description" rows="3"
                    class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-amber-400 focus:ring-4 focus:ring-amber-400/10 transition-all outline-none text-sm font-medium resize-none" 
                    placeholder="Quels types de liens contient cette catégorie ?"></textarea>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button id="annuler_addCategorie_Button" type="button" 
                    class="flex-1 px-6 py-3.5 text-sm font-bold text-slate-500 bg-slate-100 rounded-2xl hover:bg-slate-200 hover:text-slate-700 transition-all active:scale-95">
                    Annuler
                </button>
                <button type="submit" 
                    class="flex-2 bg-[#1B294B] text-white py-3.5 rounded-2xl font-black text-sm tracking-wide hover:bg-slate-800 shadow-lg shadow-slate-200 active:scale-95 transition-all">
                    Créer la catégorie
                </button>
            </div>
        </div>
    </form>
</div>