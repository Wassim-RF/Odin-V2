@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex">
    @include('layouts.admin.navBar')

    <main class="w-[85%] ml-[15%] p-8 flex flex-col gap-8">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div class="flex flex-col gap-1">
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">Journal d'activité</h1>
                <p class="text-sm text-slate-500 font-medium">Historique complet des actions effectuées.</p>
            </div>
            
            <button class="bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded-xl text-sm font-bold transition-all shadow-lg shadow-slate-200">
                Exporter les logs
            </button>
        </div>

        <div class="bg-white rounded-4xl border border-slate-100 shadow-sm p-8">
            <h3 class="font-black text-slate-900 tracking-tight mb-10">Activités Récentes</h3>

            <div class="space-y-10 relative before:absolute before:inset-0 before:ml-4 before:-translate-x-px before:h-full before:w-0.5 before:bg-slate-100">
                
                <div class="group relative flex items-start gap-6">
                    <div class="absolute left-0 flex items-center justify-center w-8 h-8 rounded-full bg-indigo-50 text-indigo-600 ring-4 ring-white z-10">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </div>
                    
                    <div class="ml-12 flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-bold text-slate-800">Mise à jour d'un utilisateur</p>
                                <p class="text-[11px] text-slate-500 font-medium mt-1">L'administrateur a modifié le profil de "Ahmed Karim".</p>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">Il y a 2 min</span>
                        </div>
                    </div>
                </div>

                <div class="group relative flex items-start gap-6">
                    <div class="absolute left-0 flex items-center justify-center w-8 h-8 rounded-full bg-rose-50 text-rose-600 ring-4 ring-white z-10">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </div>
                    
                    <div class="ml-12 flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-bold text-slate-800">Suppression de produit</p>
                                <p class="text-[11px] text-slate-500 font-medium mt-1">Le produit ID #402 a été retiré du catalogue.</p>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">Il y a 1 heure</span>
                        </div>
                    </div>
                </div>

                <div class="group relative flex items-start gap-6">
                    <div class="absolute left-0 flex items-center justify-center w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 ring-4 ring-white z-10">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    </div>
                    
                    <div class="ml-12 flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-bold text-slate-800">Nouvelle connexion</p>
                                <p class="text-[11px] text-slate-500 font-medium mt-1">Connexion réussie depuis l'adresse IP 192.168.1.1</p>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">Il y a 3 heures</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-12 pt-6 border-t border-slate-50 flex justify-center">
                <button class="text-xs font-bold text-slate-400 hover:text-slate-900 transition-colors">
                    Voir tout l'historique
                </button>
            </div>
        </div>

    </main>
</body>