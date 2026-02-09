@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')
    <main class="w-full flex flex-col gap-7 p-[5%]">
        <div class="w-full grid grid-cols-4 gap-7">
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#F1F2F4] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1B294B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $linkNumber }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Total Links</p>
                </div>
                
            </div>
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#FDF5E6] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7ZM2 7v4.5A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 12.5 5H8.207l-1.56 1.56A1.5 1.5 0 0 1 5.585 7H2Z"/></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $categorieNumber }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Categoeies</p>
                </div>
                
            </div>
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#E8F9EE] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#21C45D"><g fill="none" stroke="#21C45D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/><path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/></g></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $tagNumber }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Tags</p>
                </div>
                
            </div>
            <div class="w-full bg-[#1B294B] text-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#E6F5FC] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="#0DA2E7" d="M200 64v104a8 8 0 0 1-16 0V83.31L69.66 197.66a8 8 0 0 1-11.32-11.32L172.69 72H88a8 8 0 0 1 0-16h104a8 8 0 0 1 8 8Z"/></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $linkInLastMounth }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Total Links</p>
                </div>
                
            </div>
        </div>
        <div class="w-full grid grid-cols-3 gap-7">
            <button id="addCategorie_Modal_button" class="group w-full h-[200px] bg-white border-2 border-dashed border-gray-200 shadow-sm rounded-2xl cursor-pointer hover:border-[#F59F0A] hover:shadow-lg transition-all flex flex-col items-center justify-center gap-3">
                <div class="w-14 h-14 bg-[#FDF5E6] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16">
                            <path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7Z"/>
                        </svg>
                        <div class="absolute -bottom-1 -right-1 bg-[#F59F0A] text-white rounded-full w-5 h-5 flex items-center justify-center border-2 border-white text-xs font-bold">
                            +
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-bold text-[#0F172A]">Add New Category</h3>
                    <p class="text-sm font-medium text-slate-500">Create a new folder</p>
                </div>

            </button>
            <button id="addLien_Modal_button" class="group w-full h-[200px] bg-white border-2 border-dashed border-gray-200 shadow-sm rounded-2xl cursor-pointer hover:border-[#1B294B] hover:shadow-lg transition-all flex flex-col items-center justify-center gap-3">
                <div class="w-14 h-14 bg-[#F1F2F4] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1B294B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        <div class="absolute -bottom-2 -right-2 bg-[#1B294B] text-white rounded-full w-5 h-5 flex items-center justify-center border-2 border-white text-xs font-bold">
                            +
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-bold text-[#0F172A]">Add New Link</h3>
                    <p class="text-sm font-medium text-slate-500">Create a new link</p>
                </div>

            </button>
            <button id="addTag_Modal_button" class="group w-full h-[200px] bg-white border-2 border-dashed border-gray-200 shadow-sm rounded-2xl cursor-pointer hover:border-[#21C45D] hover:shadow-lg transition-all flex flex-col items-center justify-center gap-3">
                <div class="w-14 h-14 bg-[#E8F9EE] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#21C45D"><g fill="none" stroke="#21C45D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/><path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/></g></svg>
                        <div class="absolute -bottom-2 right-1 bg-[#21C45D] text-white rounded-full w-5 h-5 flex items-center justify-center border-2 border-white text-xs font-bold">
                            +
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-bold text-[#0F172A]">Add New Tag</h3>
                    <p class="text-sm font-medium text-slate-500">Create a new tag</p>
                </div>

            </button>
        </div>
        <div class="w-full grid grid-cols-3 gap-7">
            <div class="w-full bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden col-span-2">
                <div class="px-6 py-5 border-b border-gray-100 flex items-start justify-between">
                    <div>
                        <h2 class="text-lg font-bold text-gray-900">Recent Links</h2>
                        <p class="mt-1 text-sm text-gray-500">Your latest saved bookmarks</p>
                    </div>
                    <a href="#"
                    class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                        Voir tous les liens →
                    </a>
                </div>
                <ul class="divide-y divide-gray-100">
                    @foreach (auth()->user()->links()->latest()->limit(5)->get() as $link)
                        <li class="group flex items-center justify-between p-4 hover:bg-gray-50 transition-colors cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div>
                                    <h3 class="text-sm font-semibold text-gray-900">{{ $link->title }}</h3>
                                    <a href="{{ $link->url }}" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1" target="_blank">
                                        {{ $link->title }}
                                        <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                    </a>
                                </div>
                            </div>
                            @foreach ($link->tags()->latest()->limit(3)->get() as $linkTag)
                                
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">{{ $linkTag->name }}</span>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-100 flex items-start justify-between">
                    
                    <div>
                        <h2 class="text-lg font-bold text-gray-900">Recent Tags</h2>
                        <p class="mt-1 text-sm text-gray-500">Your latest created tags</p>
                    </div>
                    <a href="#"
                    class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                        Voir tous les tags →
                    </a>
                </div>
                <div class="p-5 flex flex-wrap gap-2">
                    @foreach (auth()->user()->tags()->latest()->limit(14)->get() as $tag)
                        <div class="flex items-center gap-2 px-3 py-1.5 bg-indigo-50 text-indigo-600 rounded-full border border-indigo-100 text-sm font-medium hover:bg-indigo-100 transition cursor-pointer">
                            <span>#{{ $tag->name }}</span>
                            <span class="text-xs bg-white text-gray-500 px-2 py-0.5 rounded-full border border-gray-200">
                                {{ $tag->links()->count() }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('modales.addCategories')
        @include('modales.addLinks')
        @include('modales.addTag')
    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
