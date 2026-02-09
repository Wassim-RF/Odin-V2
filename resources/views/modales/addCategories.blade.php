<div class="fixed inset-0 hidden items-center justify-center bg-gray-900/60 backdrop-blur-sm z-50" id="modale_addCategorie_pop">
    <form action="{{ route('create.categorie') }}" method="POST" id="group_form" class="w-[450px] mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 transform transition-all">
        @csrf
        
        <div class="px-6 py-4 border-b border-gray-100 bg-gray-50/50">
            <h3 class="text-xl font-bold text-gray-800">Créer une catégorie</h3>
            <p class="text-xs text-gray-500 mt-1">Organisez vos comptes en quelques clics.</p>
        </div>

        <div class="p-6 space-y-5">
            <div>
                <label for="categorie_title" class="block text-sm font-semibold text-gray-700 mb-1.5">Titre</label>
                <input type="text" id="categorie_title" name="categorie_title" required
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none sm:text-sm" 
                    placeholder="Ex: Mes comptes social media">
            </div>

            <div>
                <label for="categorie_description" class="block text-sm font-semibold text-gray-700 mb-1.5">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea id="categorie_description" name="categorie_description" rows="3"
                    class="block w-full rounded-xl border-gray-300 border px-4 py-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none sm:text-sm" 
                    placeholder="Ex: TikTok, Instagram, Twitter..."></textarea>
            </div>

            <div class="pt-4 flex flex-row-reverse gap-3">
                <button type="submit" class="flex-1 bg-blue-600 text-white py-2.5 rounded-xl font-bold hover:bg-blue-700 active:scale-95 transition-all shadow-md shadow-blue-200">
                    Enregistrer
                </button>
                <button id="annuler_addCategorie_Button" type="button" class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-xl font-medium hover:bg-gray-200 transition-all">
                    Annuler
                </button>
            </div>
        </div>
    </form>
</div>