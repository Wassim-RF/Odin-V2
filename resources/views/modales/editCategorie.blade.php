<div class="fixed inset-0 hidden items-center justify-center bg-slate-900/60 backdrop-blur-md z-50 transition-all duration-300" id="modale_editCategorie_pop">
    
    <form action="{{ route('edit.categorie') }}" method="POST" id="edit_categorie_form" 
        class="w-[450px] mx-auto bg-white rounded-4xl shadow-[0_20px_50px_rgba(0,0,0,0.2)] overflow-hidden border border-slate-100 transform transition-all duration-300">
        @csrf
        @method('PUT')
        
        <div class="px-8 py-6 border-b border-amber-50 bg-amber-50/20">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-100 text-amber-600 shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-black tracking-tight text-slate-900">Modifier Catégorie</h3>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-amber-600/80">Mise à jour du dossier</p>
                </div>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <input type="hidden" id="edit_categorie_id" name="categorie_id">

            <div class="space-y-2">
                <label for="edit_categorie_title" class="flex items-center gap-2 text-sm font-black text-slate-700">
                    <span>Nouveau Titre</span>
                    <span class="h-1 w-1 rounded-full bg-amber-500"></span>
                </label>
                <input type="text" id="edit_categorie_title" name="categorie_title" required
                    class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10 transition-all outline-none text-sm font-medium" 
                    placeholder="Modifier le nom...">
            </div>

            <div class="space-y-2">
                <label for="edit_categorie_description" class="flex items-center gap-2 text-sm font-black text-slate-700">
                    <span>Description</span>
                    <span class="text-amber-500">*</span>
                </label>
                <textarea id="edit_categorie_description" name="categorie_description" rows="3" required
                    class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-amber-500 focus:ring-4 focus:ring-amber-500/10 transition-all outline-none text-sm font-medium resize-none" 
                    placeholder="Mettre à jour la description..."></textarea>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button id="annuler_editCategorie_Button" type="button" 
                    class="flex-1 px-6 py-4 text-sm font-bold text-slate-500 bg-slate-100 rounded-2xl hover:bg-slate-200 transition-all active:scale-95">
                    Annuler
                </button>
                <button type="submit" 
                    class="flex-2 bg-amber-500 text-white py-4 rounded-2xl font-black text-sm tracking-wide hover:bg-amber-600 shadow-lg shadow-amber-200 active:scale-95 transition-all">
                    Enregistrer les modifications
                </button>
            </div>
        </div>
    </form>
</div>