@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')
    <main class="w-full flex flex-col gap-7 p-[5%]">
        <div class="w-full grid grid-cols-4 gap-7">
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <div class="relative z-10">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Total Links</p>
                        <h3 class="mt-2 text-4xl font-black tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors">
                            {{ $linkNumber }}
                        </h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-50 text-slate-600 transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:rotate-12 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                    </div>
                </div>
                <div class="absolute -right-4 -top-4 h-24 w-24 rounded-full bg-slate-50/50 blur-2xl transition-all group-hover:bg-blue-50/50"></div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-amber-200 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <div class="relative z-10">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Total Categories</p>
                        <h3 class="mt-2 text-4xl font-black tracking-tight text-slate-900 group-hover:text-amber-600 transition-colors">
                            {{ $categorieNumber }}
                        </h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-50 text-amber-500 transition-all duration-300 group-hover:bg-amber-500 group-hover:text-white group-hover:rotate-12 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7ZM2 7v4.5A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 12.5 5H8.207l-1.56 1.56A1.5 1.5 0 0 1 5.585 7H2Z"/>
                        </svg>
                    </div>
                </div>
                <div class="absolute -right-4 -top-4 h-24 w-24 rounded-full bg-amber-50/50 blur-2xl transition-all group-hover:bg-amber-100/80"></div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <div class="relative z-10">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Total Tags</p>
                        <h3 class="mt-2 text-4xl font-black tracking-tight text-slate-900 group-hover:text-green-600 transition-colors">
                            {{ $tagNumber }}
                        </h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-50 text-green-600 transition-all duration-300 group-hover:bg-green-600 group-hover:text-white group-hover:-rotate-6 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/>
                            <path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/>
                        </svg>
                    </div>
                </div>
                <div class="absolute -right-4 -top-4 h-24 w-24 rounded-full bg-green-50/50 blur-2xl transition-all group-hover:bg-green-100/80"></div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl bg-[#1B294B] p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-900/20 border border-slate-800">
                <div class="flex items-center justify-between">
                    <div class="relative z-10">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Total Links</p>
                        <h3 class="mt-2 text-4xl font-black tracking-tight text-white group-hover:text-blue-400 transition-colors">
                            {{ $linkInLastMounth }}
                        </h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/5 border border-white/10 text-blue-400 transition-all duration-500 group-hover:bg-blue-600 group-hover:text-white group-hover:rotate-6 shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M200 64v104a8 8 0 0 1-16 0V83.31L69.66 197.66a8 8 0 0 1-11.32-11.32L172.69 72H88a8 8 0 0 1 0-16h104a8 8 0 0 1 8 8Z"/>
                        </svg>
                    </div>
                </div>

                <div class="absolute -right-6 -top-6 h-28 w-28 rounded-full bg-blue-500/10 blur-3xl transition-all group-hover:bg-blue-500/20"></div>
                <div class="absolute -left-6 -bottom-6 h-20 w-20 rounded-full bg-slate-500/5 blur-2xl"></div>
            </div>
        </div>
        <div class="w-full grid grid-cols-3 gap-7">
            <button id="addCategorie_Modal_button" class="group relative flex h-[200px] w-full flex-col items-center justify-center gap-4 overflow-hidden rounded-2xl border-2 border-dashed border-slate-200 bg-white transition-all duration-300 hover:border-amber-400 hover:bg-amber-50/30 hover:shadow-xl hover:shadow-amber-900/5 active:scale-[0.98]">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[radial-gradient(circle_at_center,var(--tw-gradient-stops))] from-amber-100/20 via-transparent to-transparent"></div>
                <div class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-50 text-amber-500 transition-all duration-500 group-hover:bg-amber-500 group-hover:text-white group-hover:rotate-6 shadow-sm">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7Z"/>
                        </svg>
                        <div class="absolute -right-2 -top-2 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-amber-500 text-white shadow-sm transition-transform group-hover:scale-110 group-hover:bg-amber-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative z-10 text-center">
                    <h3 class="text-lg font-black tracking-tight text-slate-900 transition-colors group-hover:text-amber-700">Add New Category</h3>
                    <p class="text-sm font-bold text-slate-400 group-hover:text-amber-600/70">Create a new folder</p>
                </div>
            </button>
            <button id="addLien_Modal_button" class="group relative flex h-[200px] w-full flex-col items-center justify-center gap-4 overflow-hidden rounded-2xl border-2 border-dashed border-slate-200 bg-white transition-all duration-300 hover:border-blue-600 hover:bg-blue-50/30 hover:shadow-xl hover:shadow-blue-900/5 active:scale-[0.98]">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[radial-gradient(circle_at_center,var(--tw-gradient-stops))] from-blue-100/20 via-transparent to-transparent"></div>
                <div class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-50 text-slate-600 transition-all duration-500 group-hover:bg-[#1B294B] group-hover:text-white group-hover:-rotate-6 shadow-sm">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                        <div class="absolute -right-2 -top-2 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-blue-600 text-white shadow-sm transition-transform group-hover:scale-110 group-hover:bg-[#1B294B]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative z-10 text-center">
                    <h3 class="text-lg font-black tracking-tight text-slate-900 transition-colors group-hover:text-blue-900">Add New Link</h3>
                    <p class="text-sm font-bold text-slate-400 group-hover:text-blue-600/70">Bookmark a new URL</p>
                </div>
            </button>
            <button id="addTag_Modal_button" class="group relative flex h-[200px] w-full flex-col items-center justify-center gap-4 overflow-hidden rounded-2xl border-2 border-dashed border-slate-200 bg-white transition-all duration-300 hover:border-green-500 hover:bg-green-50/30 hover:shadow-xl hover:shadow-green-900/5 active:scale-[0.98]">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[radial-gradient(circle_at_center,var(--tw-gradient-stops))] from-green-100/20 via-transparent to-transparent"></div>
                <div class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600 transition-all duration-500 group-hover:bg-green-600 group-hover:text-white group-hover:rotate-12 shadow-sm">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/>
                            <path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/>
                        </svg>
                        <div class="absolute -right-2 -top-2 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green-500 text-white shadow-sm transition-transform group-hover:scale-110 group-hover:bg-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative z-10 text-center">
                    <h3 class="text-lg font-black tracking-tight text-slate-900 transition-colors group-hover:text-green-800">Add New Tag</h3>
                    <p class="text-sm font-bold text-slate-400 group-hover:text-green-600/70">Create a new label</p>
                </div>
            </button>
        </div>
        <div class="w-full grid grid-cols-3 gap-7">
            <div class="col-span-2 w-full overflow-hidden rounded-2xl border border-slate-200/60 bg-white shadow-sm">
                <div class="flex items-start justify-between border-b border-slate-100 px-6 py-5">
                    <div>
                        <h2 class="text-lg font-bold tracking-tight text-slate-900">Recent Links</h2>
                        <p class="mt-1 text-sm font-medium text-slate-400">Your latest saved bookmarks</p>
                    </div>
                    <a href="#"
                    class="group flex items-center gap-1 rounded-xl px-3 py-1.5 text-sm font-bold text-blue-600 transition-all hover:bg-blue-50">
                        Voir tous
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>

                <ul class="divide-y divide-slate-50">
                    @foreach (auth()->user()->links()->latest()->limit(5)->get() as $link)
                        <li class="group flex cursor-pointer items-center justify-between p-4 transition-all hover:bg-slate-50/80">
                            <div class="flex items-center gap-4">
                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </div>

                                <div>
                                    <h3 class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">{{ $link->title }}</h3>
                                    <a href="{{ $link->url }}" class="mt-0.5 flex items-center gap-1 text-xs font-medium text-slate-400 hover:text-slate-600 hover:underline" target="_blank">
                                        {{ Str::limit($link->url, 30) }}
                                        <svg class="h-3 w-3 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                @foreach ($link->tags()->latest()->limit(3)->get() as $linkTag)
                                    <span class="rounded-lg border border-slate-200 bg-slate-50 px-2.5 py-1 text-[11px] font-bold text-slate-500 transition-colors group-hover:border-blue-100 group-hover:bg-white group-hover:text-blue-500">
                                        {{ $linkTag->name }}
                                    </span>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full overflow-hidden rounded-2xl border border-slate-200/60 bg-white shadow-sm">
                <div class="flex items-start justify-between border-b border-slate-100 px-6 py-5">
                    <div>
                        <h2 class="text-lg font-bold tracking-tight text-slate-900">Recent Tags</h2>
                        <p class="mt-1 text-sm font-medium text-slate-400">Your latest created tags</p>
                    </div>
                    <a href="#"
                    class="group flex items-center gap-1 rounded-xl px-3 py-1.5 text-sm font-bold text-blue-600 transition-all hover:bg-blue-50">
                        Voir tous
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
                <div class="flex flex-wrap gap-2.5 p-6">
                    @foreach (auth()->user()->tags()->latest()->limit(14)->get() as $tag)
                        <div class="group flex cursor-pointer items-center gap-2 rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm font-bold text-slate-600 transition-all hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600 hover:shadow-sm">
                            <span class="text-slate-400 transition-colors group-hover:text-blue-400">#</span>
                            <span>{{ $tag->name }}</span>
                            <span class="ml-1 flex h-5 min-w-5 items-center justify-center rounded-md bg-white px-1.5 text-[10px] text-slate-400 ring-1 ring-slate-100 transition-colors group-hover:text-blue-500 group-hover:ring-blue-100">
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
