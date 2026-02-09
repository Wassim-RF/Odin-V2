@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#0F172A] tracking-tight">Mes Catégories</h1>
                <p class="text-[15px] font-medium text-slate-500">Gérez l'organisation de vos liens</p>
            </div>

            <form method="GET" action="{{ route('categories.index') }}" class="relative w-full md:w-80">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input 
                    type="search" 
                    name="search"
                    id="searchCategory"
                    value="{{ request('search') }}" 
                    placeholder="Rechercher une catégorie..." 
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl leading-5 bg-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#F59F0A] focus:border-transparent sm:text-sm transition-all shadow-sm"
                >
            </form>
        </div>

        <div id="categoriesGrid" class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach ($categories as $categorie)
                <div class="category-card group relative bg-white border border-gray-200 shadow-sm rounded-2xl p-6 hover:shadow-md hover:border-[#F59F0A] transition-all cursor-pointer">
                    <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button title="Modifier" data-id="{{ $categorie->id }}" data-title="{{ $categorie->title }}" data-description="{{ $categorie->description }}" class="p-2 bg-slate-50 hover:bg-blue-50 text-slate-400 hover:text-blue-600 rounded-lg transition-colors border border-gray-100 editCategorie_Modal_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </button>
                        <form action="{{ route('delete.categorie') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="categorie_id" value="{{ $categorie->id }}">
                            <button title="Supprimer" class="p-2 bg-slate-50 hover:bg-red-50 text-slate-400 hover:text-red-600 rounded-lg transition-colors border border-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </form>
                    </div>
                    
                    <div class="w-12 h-12 bg-[#FDF5E6] rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7ZM2 7v4.5A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 12.5 5H8.207l-1.56 1.56A1.5 1.5 0 0 1 5.585 7H2Z"/>
                        </svg>
                    </div>

                    <div class="space-y-1">
                        <h3 class="category-title text-xl font-bold text-[#0F172A]">{{ $categorie->title }}</h3>
                        <p class="text-sm font-medium text-slate-500">{{ $categorie->links_count }} Liens enregistrés</p>
                    </div>

                    <a href="/categorie/{{ $categorie->id }}" class="mt-4 flex items-center text-[#F59F0A] font-bold text-sm group-hover:gap-2 transition-all">
                        Voir les liens <span class="ml-1 transition-all">→</span>
                    </a>
                </div>
            @endforeach

            <button type="button" id="addCategorie_Modal_button" class="w-full min-h-[200px] border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center p-6 hover:border-[#F59F0A] hover:bg-orange-50/30 transition-all cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm mb-3">
                    <span class="text-[#F59F0A] font-bold text-xl">+</span>
                </div>
                <span class="text-sm font-bold text-slate-600">Ajouter une catégorie</span>
            </button>
        </div>

        @include('modales.addCategories')
        @include('modales.editCategorie')
    </main>

    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>