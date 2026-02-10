<header class="sticky top-0 z-40 w-full bg-white/70 backdrop-blur-xl border-b border-slate-100">
    <div class="max-w-8xl mx-auto px-6">
        <div class="flex h-20 justify-between items-center">
            <div class="flex items-center">
                <a href="/home" class="group flex items-center gap-3 transition-transform active:scale-95">
                    <div class="relative">
                        <img src="{{ asset('assets/picture/odin2.png') }}" alt="Logo" class="h-11 w-auto rounded-xl shadow-lg shadow-blue-100 group-hover:rotate-3 transition-all duration-300">
                        <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-black/5"></div>
                    </div>
                    <span class="font-black text-2xl tracking-tighter text-slate-900 group-hover:text-blue-600 transition-colors">Odin</span>
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-1 p-1.5 bg-slate-100/50 rounded-2xl border border-slate-200/60">
            @php
                $navs = [
                    ['label' => 'Accueil', 'url' => '/home', 'active' => request()->is('home'), 'icon' => null],
                    ['label' => 'Catégories', 'url' => '/categories', 'active' => request()->is('categories'), 'icon' => null],
                    ['label' => 'Liens', 'url' => '/links', 'active' => request()->is('links'), 'icon' => null],
                    ['label' => 'Tags', 'url' => '/tags', 'active' => request()->is('tags'), 'icon' => null],
                    ['label' => 'Partagés', 'url' => '/sharedLinks', 'active' => request()->is('sharedLinks'), 'isShared' => true]
                ];
            @endphp

            @foreach($navs as $nav)
                <a href="{{ $nav['url'] }}" 
                class="relative px-5 py-2 text-sm font-bold rounded-xl transition-all duration-200 
                {{ $nav['active'] 
                        ? (isset($nav['isShared']) ? 'bg-purple-600 text-white shadow-lg shadow-purple-200' : 'bg-white text-blue-600 shadow-sm ring-1 ring-slate-200') 
                        : (isset($nav['isShared']) ? 'text-purple-600 hover:bg-purple-50' : 'text-slate-500 hover:text-slate-900 hover:bg-white/50') 
                }}">
                    
                    <div class="flex items-center gap-2">
                        @if(isset($nav['isShared']))
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                        @endif
                        {{ $nav['label'] }}
                    </div>

                    @if(isset($nav['isShared']) && !request()->is('shared'))
                        <span class="absolute -top-1 -right-1 flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-purple-500"></span>
                        </span>
                    @endif
                </a>
            @endforeach
        </nav>

            <div class="group relative py-2">
                <button class="flex items-center gap-3 pl-2 pr-4 py-1.5 rounded-2xl bg-slate-50 border border-slate-200 group-hover:bg-white group-hover:border-blue-200 transition-all duration-300 shadow-sm">
                    <div class="relative">
                        <img class="h-9 w-9 rounded-full object-cover border-2 border-white shadow-sm" 
                            src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0ea5e9&color=fff&bold=true" 
                            alt="Profile">
                        <span class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-500 border-2 border-white"></span>
                    </div>
                    
                    <div class="text-left hidden sm:block">
                        <div class="flex items-center gap-2">
                            <p class="text-[13px] font-bold text-slate-900 leading-none">{{ auth()->user()->name }}</p>

                            @php
                                $roleName = auth()->user()->role->name ?? 'Viewer'; 
                                $roleColor = match(strtolower(auth()->user()->roles->first()->name)) {
                                    'admin' => 'bg-rose-100 text-rose-600 border-rose-200',
                                    'user' => 'bg-amber-100 text-amber-600 border-amber-200'
                                };
                            @endphp
                            <span class="px-2 py-0.5 text-[10px] font-black uppercase tracking-tighter rounded-md border {{ $roleColor }}">
                                {{ auth()->user()->roles->first()->name }}
                            </span>
                        </div>
                        <p class="text-[10px] text-slate-400 font-medium mt-1 tracking-wider">{{ auth()->user()->email }}</p>
                    </div>

                    <svg class="w-4 h-4 text-slate-400 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="absolute right-0 mt-4 w-60 origin-top-right bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-slate-100 p-2 opacity-0 translate-y-4 invisible group-hover:opacity-100 group-hover:translate-y-0 group-hover:visible transition-all duration-300 z-50">

                    <div class="px-4 py-3 border-b border-slate-50 mb-2">
                        <p class="text-[11px] text-slate-400 font-bold uppercase tracking-widest mb-1">Account Role</p>
                        <div class="flex items-center gap-2">
                            <div class="h-2 w-2 rounded-full {{ strtolower(auth()->user()->roles->first()->name) == 'admin' ? 'bg-rose-500' : 'bg-amber-500' }}"></div>
                            <p class="text-sm font-bold text-slate-700 capitalize">{{ auth()->user()->roles->first()->name }}</p>
                        </div>
                    </div>

                    <div class="space-y-1">
                        <a href="/profile" class="flex items-center gap-3 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition-all">
                            <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            Mon Profil
                        </a>

                        @if(strtolower(auth()->user()->roles->first()->name) == 'admin')
                            <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-2.5 text-sm font-semibold text-rose-600 hover:bg-rose-50 rounded-xl transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                Administration
                            </a>
                        @endif
                    </div>

                    <div class="my-2 border-t border-slate-50"></div>

                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex w-full items-center gap-3 px-4 py-3 text-sm font-bold text-rose-500 hover:bg-rose-50 rounded-xl transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                            Se déconnecter
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>