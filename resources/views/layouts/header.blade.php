<header class="bg-white shadow-sm w-full px-5 border-b border-gray-100">
    <div class="flex h-16 justify-between items-center">
        <div class="flex items-center">
            <a href="/home" class="shrink-0 flex items-center gap-2">
                <img src="{{ asset('assets/picture/odin2.png') }}" alt="Logo" class="h-10 w-auto rounded-lg">
                <span class="font-bold text-xl tracking-tight text-gray-900">BrandName</span>
            </a>
        </div>

        <nav class="hidden md:flex space-x-8">
            <a href="/home" class="px-3 py-2 text-sm font-medium {{ request()->is('home') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Accueil</a>
            <a href="/categories" class="px-3 py-2 text-sm font-medium {{ request()->is('categories') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Catégories</a>
            <a href="/links" class="px-3 py-2 text-sm font-medium {{ request()->is('links') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Liens</a>
            <a href="/tags" class="px-3 py-2 text-sm font-medium {{ request()->is('tags') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Tags</a>
        </nav>

        <div class="group relative py-4">
            <button class="flex items-center gap-3 focus:outline-none">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-gray-900 leading-none">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-500 mt-1">{{ auth()->user()->email }}</p>
                </div>
                <img class="h-9 w-9 rounded-full border border-gray-200" src="https://ui-avatars.com/api/?name=Anas+Errami&background=6366f1&color=fff" alt="User profile">
            </button>

            <div class="absolute right-0 top-full w-48 bg-white rounded-md shadow-xl border border-gray-100 py-1 
                        opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                
                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Mon Profil</a>
                <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Paramètres</a>
                
                <hr class="my-1 border-gray-100">

                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex w-full items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        Se déconnecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>