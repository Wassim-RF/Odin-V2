@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex">
    @include('layouts.admin.navBar')

    <main class="flex-1 ml-72 p-8 flex flex-col gap-8">
        
        <div class="flex flex-col gap-1">
            <h1 class="text-2xl font-black text-slate-900 tracking-tight">Tableau de bord</h1>
            <p class="text-sm text-slate-500 font-medium">Bienvenue, voici un aperçu de votre plateforme aujourd'hui.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-2.5 bg-rose-50 rounded-xl">
                        <svg class="w-6 h-6 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <span class="text-[10px] font-black px-2 py-1 bg-green-100 text-green-600 rounded-lg uppercase">+12%</span>
                </div>
                <p class="text-sm font-bold text-slate-500">Utilisateurs</p>
                <p class="text-2xl font-black text-slate-900 leading-none mt-1">1,284</p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-2.5 bg-blue-50 rounded-xl">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.826L10.242 10.242m-4.242 4.242l-.242.242"/></svg>
                    </div>
                    <span class="text-[10px] font-black px-2 py-1 bg-green-100 text-green-600 rounded-lg uppercase">+5%</span>
                </div>
                <p class="text-sm font-bold text-slate-500">Liens Partagés</p>
                <p class="text-2xl font-black text-slate-900 leading-none mt-1">8,432</p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-2.5 bg-amber-50 rounded-xl">
                        <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                    </div>
                    <span class="text-[10px] font-black px-2 py-1 bg-slate-100 text-slate-500 rounded-lg uppercase">Stable</span>
                </div>
                <p class="text-sm font-bold text-slate-500">Catégories</p>
                <p class="text-2xl font-black text-slate-900 leading-none mt-1">42</p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-2.5 bg-purple-50 rounded-xl">
                        <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <span class="text-[10px] font-black px-2 py-1 bg-rose-100 text-rose-600 rounded-lg uppercase">-2%</span>
                </div>
                <p class="text-sm font-bold text-slate-500">Visites (24h)</p>
                <p class="text-2xl font-black text-slate-900 leading-none mt-1">12.5k</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 bg-white rounded-4xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="px-8 py-6 border-b border-slate-50 flex justify-between items-center">
                    <h3 class="font-black text-slate-900 tracking-tight">Nouveaux Utilisateurs</h3>
                    <a href="#" class="text-xs font-bold text-rose-500 hover:underline">Voir tout</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="px-8 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Utilisateur</th>
                                <th class="px-8 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Rôle</th>
                                <th class="px-8 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Date</th>
                                <th class="px-8 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-4">
                                    <div class="flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=0ea5e9&color=fff" class="w-8 h-8 rounded-full shadow-sm" alt="">
                                        <span class="text-sm font-bold text-slate-700">John Doe</span>
                                    </div>
                                </td>
                                <td class="px-8 py-4 text-sm font-medium text-slate-500">User</td>
                                <td class="px-8 py-4 text-sm font-medium text-slate-500">12 Feb 2024</td>
                                <td class="px-8 py-4"><span class="px-2.5 py-1 text-[10px] font-black bg-green-50 text-green-600 rounded-lg border border-green-100 uppercase tracking-tighter">Actif</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-4">
                                    <div class="flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+K&background=f43f5e&color=fff" class="w-8 h-8 rounded-full shadow-sm" alt="">
                                        <span class="text-sm font-bold text-slate-700">Sarah Kern</span>
                                    </div>
                                </td>
                                <td class="px-8 py-4 text-sm font-medium text-slate-500">Admin</td>
                                <td class="px-8 py-4 text-sm font-medium text-slate-500">11 Feb 2024</td>
                                <td class="px-8 py-4"><span class="px-2.5 py-1 text-[10px] font-black bg-green-50 text-green-600 rounded-lg border border-green-100 uppercase tracking-tighter">Actif</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-4xl border border-slate-100 shadow-sm p-8">
                <h3 class="font-black text-slate-900 tracking-tight mb-6">Activités</h3>
                <div class="space-y-6 relative before:absolute before:inset-0 before:ml-2 before:-translate-x-px before:h-full before:w-0.5 before:bg-linear-to-b before:from-slate-100 before:via-slate-100 before:to-transparent">
                    <div class="relative flex items-center gap-4">
                        <div class="absolute left-0 w-4 h-4 rounded-full bg-rose-500 border-4 border-white shadow-sm ring-1 ring-slate-100"></div>
                        <div class="ml-8">
                            <p class="text-sm font-bold text-slate-800">Nouveau lien ajouté</p>
                            <p class="text-[11px] text-slate-400 font-medium">Il y a 15 minutes</p>
                        </div>
                    </div>
                    <div class="relative flex items-center gap-4">
                        <div class="absolute left-0 w-4 h-4 rounded-full bg-blue-500 border-4 border-white shadow-sm ring-1 ring-slate-100"></div>
                        <div class="ml-8">
                            <p class="text-sm font-bold text-slate-800">Catégorie "Design" créée</p>
                            <p class="text-[11px] text-slate-400 font-medium">Il y a 2 heures</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>