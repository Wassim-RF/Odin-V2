<aside class="fixed inset-y-0 left-0 z-50 w-[15%] bg-white/80 backdrop-blur-xl border-r border-slate-100 h-screen flex flex-col">
    
    <div class="h-20 flex items-center px-8 border-b border-slate-100/50">
        <a href="#" class="group flex items-center gap-3 transition-transform active:scale-95">
            <div class="relative">
                <img src="/assets/picture/odin2.png" alt="Logo" class="h-10 w-auto rounded-xl shadow-lg shadow-rose-100 group-hover:rotate-3 transition-all duration-300">
                <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-black/5"></div>
            </div>
            <span class="font-black text-2xl tracking-tighter text-slate-900 group-hover:text-rose-600 transition-colors">
                Odin <span class="ml-1 px-1.5 py-0.5 text-[10px] uppercase tracking-widest font-bold text-rose-500 bg-rose-50 border border-rose-100 rounded-md">Admin</span>
            </span>
        </a>
    </div>

    <div class="flex-1 overflow-y-auto py-6 px-4 space-y-1">
        
        <p class="px-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Navigation</p>
        <a href="/home" class="group relative flex items-center gap-3 px-4 py-3 text-sm font-bold text-blue-600 hover:bg-blue-50 rounded-xl transition-all duration-200 mb-4 border border-dashed border-blue-200 bg-blue-50/30">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Retour au site
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3 ml-auto opacity-50 group-hover:translate-x-1 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </a>

        <div class="my-6 border-t border-slate-100/80 mx-2"></div>

        @php
            $navs = [
                    ['label' => 'Tableau de bord', 'url' => '/admin/dashboard', 'active' => request()->is('admin/dashboard'), 'icon' => `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-rose-500"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" /></svg>`],
                    ['label' => 'Utilisateurs', 'url' => '/admin/users', 'active' => request()->is('admin/users'), 'icon' => `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>`],
                    ['label' => 'Gestion Contenu', 'url' => '/admin/logs', 'active' => request()->is('admin/logs'), 'icon' => `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>`]
                ];
        @endphp

        <nav class="flex flex-col gap-2.5">
            <p class="px-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Menu Principal</p>
            @foreach ($navs as $nav)
                <a href="{{ $nav['url'] }}" 
                    class="group relative flex items-center gap-3 px-4 py-3 text-sm font-bold 
                    {{ $nav['active'] ? 
                    "bg-rose-50 text-rose-600 shadow-sm ring-1 ring-rose-100 ":
                    "text-slate-500 hover:text-slate-900 hover:bg-white/60"
                    }}
                    rounded-xl transition-all duration-200">
                    {!! $nav['icon'] !!}
                    {{ $nav['label'] }}
                    @if ($nav['active'])
                        <span class="absolute right-3 w-1.5 h-1.5 rounded-full bg-rose-500 shadow shadow-rose-200"></span>
                    @endif
                </a>
            @endforeach
    
            {{-- <a href="/admin/users" class="group relative flex items-center gap-3 px-4 py-3 text-sm font-bold text-slate-500 hover:text-slate-900 hover:bg-white/60 hover:shadow-sm rounded-xl transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                Utilisateurs
            </a>
    
            <a href="#" class="group relative flex items-center gap-3 px-4 py-3 text-sm font-bold text-slate-500 hover:text-slate-900 hover:bg-white/60 hover:shadow-sm rounded-xl transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                Gestion Contenu
            </a> --}}
        </nav>


        <div class="my-6 border-t border-slate-100/80 mx-2"></div>

        <p class="px-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Système</p>

        <a href="#" class="group relative flex items-center gap-3 px-4 py-3 text-sm font-bold text-slate-500 hover:text-slate-900 hover:bg-white/60 hover:shadow-sm rounded-xl transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 018.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.43.816 1.035.816 1.73 0 .695-.321 1.3-.816 1.73m0-3.46a24.347 24.347 0 010 3.46" />
            </svg>
            Paramètres
        </a>
    </div>

    <div class="p-4 border-t border-slate-100/80 bg-slate-50/50">
        <div class="flex items-center gap-3 p-2.5 rounded-2xl bg-white border border-slate-200/60 shadow-sm">
            <img class="h-9 w-9 rounded-full object-cover border-2 border-white shadow-sm" 
                 src="https://ui-avatars.com/api/?name=Admin+User&background=f43f5e&color=fff&bold=true" 
                 alt="Profile">
            
            <div class="flex-1 min-w-0">
                <p class="text-xs font-black text-slate-900 truncate">{{ ucfirst(auth()->user()->name) }}</p>
                <p class="text-[10px] text-slate-400 font-medium truncate">{{ auth()->user()->email }}</p>
            </div>
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button class="p-1.5 text-slate-400 hover:text-rose-500 hover:bg-rose-50 rounded-lg transition-all" title="Se déconnecter">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

</aside>