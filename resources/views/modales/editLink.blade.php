<div class="fixed inset-0 hidden items-center justify-center bg-gray-900/60 backdrop-blur-sm z-50" id="modale_editLink_pop">
    <form action="{{ route('edit.link') }}" method="POST" id="edit_link_form" class="w-[450px] mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 transform transition-all">
        @csrf
        @method('PUT')
        <div class="px-6 py-4 border-b border-gray-100 bg-[#F1F2F4]/50">
            <h3 class="text-xl font-bold text-[#0F172A]">Modifier le lien</h3>
            <p class="text-xs text-gray-500 mt-1">Mettez à jour les informations de votre ressource.</p>
        </div>

        <div class="p-6 space-y-5">
            <div>
                <label for="edit_link_title" class="block text-sm font-semibold text-gray-700 mb-1.5">Nom du site / Titre</label>
                <input type="text" id="edit_link_title" name="link_title" required
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-[#0F172A] shadow-sm focus:border-[#1B294B] focus:ring-4 focus:ring-[#1B294B]/10 transition-all outline-none sm:text-sm" 
                    placeholder="Ex: Mon Portfolio">
            </div>

            <div>
                <label for="edit_link_url" class="block text-sm font-semibold text-gray-700 mb-1.5">URL (Lien)</label>
                <input type="url" id="edit_link_url" name="link_url" required
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-[#0F172A] shadow-sm focus:border-[#1B294B] focus:ring-4 focus:ring-[#1B294B]/10 transition-all outline-none sm:text-sm" 
                    placeholder="https://www.monlien.com">
            </div>

            <div>
                <label for="edit_link_category" class="block text-sm font-semibold text-gray-700 mb-1.5">Choisir une catégorie</label>
                <select id="edit_link_category" name="category_id" required
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-[#0F172A] shadow-sm focus:border-[#1B294B] focus:ring-4 focus:ring-[#1B294B]/10 transition-all outline-none sm:text-sm bg-white">
                    <option value="" disabled selected>Sélectionner une catégorie</option>
                    @foreach(auth()->user()->categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Sélectionner des tags</label>
                @if(auth()->user()->tags->count() > 0)
                    <div class="flex flex-wrap gap-2 max-h-32 overflow-y-auto pr-1 custom-scrollbar">
                        @foreach(auth()->user()->tags as $tag)
                            <label class="cursor-pointer relative group">
                                <input type="checkbox" name="link_tag[]" value="{{ $tag->id }}" id="edit_tag_{{ $tag->id }}" class="peer sr-only">
                                <span class="inline-block px-3 py-1.5 text-xs font-medium rounded-lg border border-gray-200 bg-gray-50 text-gray-600 transition-all group-hover:bg-gray-100 peer-checked:bg-[#F1F2F4] peer-checked:text-[#1B294B] peer-checked:border-[#1B294B]/30 peer-checked:ring-1 peer-checked:ring-[#1B294B]">
                                    #{{ $tag->name }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                @else
                    <p class="text-xs text-gray-400 italic">Aucun tag disponible.</p>
                @endif
            </div>

            <input type="hidden" name="link_id" id="edit_link_id">

            <div class="pt-4 flex flex-row-reverse gap-3">
                <button type="submit" class="flex-1 bg-[#1B294B] text-white py-2.5 rounded-xl font-bold hover:bg-[#0F172A] active:scale-95 transition-all shadow-md shadow-gray-300">
                    Enregistrer les modifications
                </button>
                <button id="annuler_editLink_Button" type="button" class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-xl font-medium hover:bg-gray-200 transition-all">
                    Annuler
                </button>
            </div>
        </div>
    </form>
</div>