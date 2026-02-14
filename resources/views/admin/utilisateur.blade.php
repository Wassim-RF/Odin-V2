@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex">
    @include('layouts.admin.navBar')

    <main class="w-[85%] ml-[15%] p-8 flex flex-col gap-8">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div class="flex flex-col gap-1">
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">Utilisateurs</h1>
                <p class="text-sm text-slate-500 font-medium">Gérez les accès et les statuts des membres de la plateforme.</p>
            </div>
            
            <button class="bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded-xl text-sm font-bold transition-colors shadow-lg shadow-slate-200">
                + Nouvel utilisateur
            </button>
        </div>

        <div class="bg-white p-4 rounded-3xl border border-slate-100 shadow-sm flex flex-col md:flex-row justify-between gap-4">
            <div class="relative w-full md:w-96">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" placeholder="Rechercher par nom, email..." class="w-full pl-12 pr-4 py-3 bg-slate-50 border-none rounded-xl text-sm font-semibold text-slate-700 placeholder-slate-400 focus:ring-2 focus:ring-rose-500 focus:bg-white transition-all">
            </div>
            <div class="flex gap-2">
                <select class="bg-slate-50 border-none rounded-xl text-sm font-bold text-slate-600 focus:ring-2 focus:ring-rose-500 py-3 px-4">
                    <option>Tous les rôles</option>
                    <option>Administrateur</option>
                    <option>Utilisateur</option>
                </select>
            </div>
        </div>

        <div class="bg-white rounded-4xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50 border-b border-slate-100">
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Utilisateur</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Rôle</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Statut</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Date d'inscription</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @foreach ($usersPagination as $user)
                            @include('components.admin.allUser')
                        @endforeach

                        {{-- <tr class="hover:bg-slate-50/80 transition-colors group">
                            <td class="px-8 py-4">
                                <div class="flex items-center gap-4">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Connor&background=random" alt="" class="w-10 h-10 rounded-full">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 text-sm">Sarah Connor</span>
                                        <span class="text-xs text-slate-500 font-medium">sarah@skynet.com</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-white text-slate-500 border border-slate-200">
                                    Utilisateur
                                </span>
                            </td>
                            <td class="px-8 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Actif
                                </span>
                            </td>
                            <td class="px-8 py-4">
                                <span class="text-sm font-bold text-slate-500">10 Fév 2024</span>
                            </td>
                            <td class="px-8 py-4 text-right">
                                <button class="text-xs font-bold text-slate-400 hover:text-slate-900 bg-white hover:bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg transition-all mr-2">
                                    Éditer
                                </button>
                                <button class="text-xs font-bold text-rose-500 hover:text-rose-700 bg-rose-50 hover:bg-rose-100 border border-rose-100 px-3 py-1.5 rounded-lg transition-all">
                                    Désactiver
                                </button>
                            </td>
                        </tr>

                        <tr class="bg-slate-50/50 hover:bg-slate-100 transition-colors group opacity-75">
                            <td class="px-8 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-500 text-sm line-through decoration-slate-300">Mike Ban</span>
                                        <span class="text-xs text-slate-400 font-medium">mike@banned.com</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-white text-slate-400 border border-slate-200">
                                    Utilisateur
                                </span>
                            </td>
                            <td class="px-8 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-rose-50 text-rose-500 border border-rose-100">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                                    Suspendu
                                </span>
                            </td>
                            <td class="px-8 py-4">
                                <span class="text-sm font-bold text-slate-400">01 Jan 2024</span>
                            </td>
                            <td class="px-8 py-4 text-right">
                                <button class="text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 hover:bg-emerald-100 border border-emerald-100 px-3 py-1.5 rounded-lg transition-all">
                                    Réactiver
                                </button>
                            </td>
                        </tr> --}}

                    </tbody>
                </table>
            </div>

            <div class="px-8 py-6 border-t border-slate-50 flex justify-between items-center">
                <p class="text-xs font-bold text-slate-400">Affichage de 1 à 3 sur 12 utilisateurs</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 text-xs font-bold text-slate-400 hover:text-slate-600 bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors" disabled>Précédent</button>
                    <button class="px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-slate-900 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors shadow-sm">Suivant</button>
                </div>
            </div>
        </div>

    </main>
</body>