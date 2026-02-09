<div class="fixed inset-0 hidden items-center justify-center bg-gray-900/60 backdrop-blur-sm z-50" id="modale_editCategorie_pop">
    <form action="{{ route('edit.categorie') }}" method="POST" id="edit_categorie_form" class="w-[450px] mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 transform transition-all">
        @csrf
        @method('PUT')
        
        <div class="px-6 py-4 border-b border-gray-100 bg-orange-50/50">
            <h3 class="text-xl font-bold text-gray-800">Modifier la catégorie</h3>
            <p class="text-xs text-gray-500 mt-1">Mettez à jour les informations de votre dossier.</p>
        </div>

        <div class="p-6 space-y-5">
            <div>
                <label for="edit_categorie_title" class="block text-sm font-semibold text-gray-700 mb-1.5">Nouveau Titre</label>
                <input type="text" id="edit_categorie_title" name="categorie_title" required
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-gray-900 shadow-sm focus:border-[#F59F0A] focus:ring-4 focus:ring-[#F59F0A]/10 transition-all outline-none sm:text-sm" 
                    placeholder="Ex: Mes favoris">
            </div>

            <div>
                <label for="edit_categorie_description" class="block text-sm font-semibold text-gray-700 mb-1.5">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea id="edit_categorie_description" name="categorie_description" rows="3"
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-gray-900 shadow-sm focus:border-[#F59F0A] focus:ring-4 focus:ring-[#F59F0A]/10 transition-all outline-none sm:text-sm" 
                    placeholder="Modifier la description..."></textarea>
            </div>

            <input type="hidden" id="edit_categorie_id" name="categorie_id">

            <div class="pt-4 flex flex-row-reverse gap-3">
                <button type="submit" class="flex-1 bg-[#F59F0A] text-white py-2.5 rounded-xl font-bold hover:bg-[#e09109] active:scale-95 transition-all shadow-md shadow-orange-100">
                    Mettre à jour
                </button>
                <button id="annuler_editCategorie_Button" type="button" class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-xl font-medium hover:bg-gray-200 transition-all">
                    Annuler
                </button>
            </div>
        </div>
    </form>
</div>