<div class="fixed inset-0 hidden items-center justify-center bg-slate-900/60 backdrop-blur-md z-50 transition-all duration-300" id="modale_editLink_pop">
    
    <form action="{{ route('edit.link') }}" method="POST" id="edit_link_form" 
        class="w-[500px] mx-auto bg-white rounded-4xl shadow-[0_20px_50px_rgba(0,0,0,0.2)] overflow-hidden border border-slate-100 transform transition-all duration-300">
        @csrf
        @method('PUT')
        
        <div class="px-8 py-6 border-b border-slate-50 bg-slate-50/30">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1B294B] text-white shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-black tracking-tight text-slate-900">Modifier le Lien</h3>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400">Mise à jour des paramètres</p>
                </div>
            </div>
        </div>

        <div class="p-8 space-y-5">
            <input type="hidden" name="link_id" id="edit_link_id">

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label for="edit_link_title" class="flex items-center gap-2 text-sm font-black text-slate-700">Nom du site</label>
                    <input type="text" id="edit_link_title" name="link_title" required
                        class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-blue-900 focus:ring-4 focus:ring-blue-900/10 transition-all outline-none text-sm font-medium" 
                        placeholder="Ex: Mon Portfolio">
                </div>

                <div class="space-y-2">
                    <label for="edit_link_category" class="flex items-center gap-2 text-sm font-black text-slate-700">Catégorie</label>
                    <select id="edit_link_category" name="category_id" required
                        class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 text-slate-900 focus:bg-white focus:border-blue-900 focus:ring-4 focus:ring-blue-900/10 transition-all outline-none text-sm font-medium appearance-none">
                        <option value="" disabled selected>Choisir...</option>
                        @foreach(auth()->user()->categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="space-y-2">
                <label for="edit_link_url" class="flex items-center gap-2 text-sm font-black text-slate-700">URL (Lien)</label>
                <div class="relative group">
                    <input type="url" id="edit_link_url" name="link_url" required
                        class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 pl-11 pr-4 py-3 text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-blue-900 focus:ring-4 focus:ring-blue-900/10 transition-all outline-none text-sm font-medium" 
                        placeholder="https://example.com">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <label class="flex items-center gap-2 text-sm font-black text-slate-700">Modifier les tags</label>
                @if(auth()->user()->tags->count() > 0)
                    <div class="flex flex-wrap gap-2 max-h-32 overflow-y-auto pr-2 custom-scrollbar">
                        @foreach(auth()->user()->tags as $tag)
                            <label class="cursor-pointer relative group">
                                <input type="checkbox" name="link_tag[]" value="{{ $tag->id }}" id="edit_tag_{{ $tag->id }}" class="peer sr-only">
                                <span class="inline-block px-4 py-2 text-[11px] font-black uppercase tracking-wider rounded-xl border border-slate-200 bg-slate-50 text-slate-500 transition-all hover:bg-slate-100 peer-checked:bg-[#1B294B] peer-checked:text-white peer-checked:border-[#1B294B] peer-checked:shadow-lg peer-checked:shadow-blue-900/20">
                                    #{{ $tag->name }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                @else
                    <p class="text-xs text-slate-400 font-bold italic">Aucun tag disponible.</p>
                @endif
            </div>

            <div class="flex items-center gap-3 pt-4">
                <button id="annuler_editLink_Button" type="button" 
                    class="flex-1 px-6 py-4 text-sm font-bold text-slate-500 bg-slate-100 rounded-2xl hover:bg-slate-200 transition-all active:scale-95">
                    Annuler
                </button>
                <button type="submit" 
                    class="flex-2 bg-[#1B294B] text-white py-4 rounded-2xl font-black text-sm tracking-wide hover:bg-slate-800 shadow-xl shadow-blue-900/20 active:scale-95 transition-all">
                    Sauvegarder les changements
                </button>
            </div>
        </div>
    </form>
</div>