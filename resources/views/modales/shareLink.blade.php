<div class="fixed inset-0 hidden items-center justify-center bg-slate-900/60 backdrop-blur-md z-50 transition-all duration-300" id="modale_shareLink_pop">
    <div id="share_form" 
        class="w-[450px] mx-auto bg-white rounded-4xl shadow-[0_20px_50px_rgba(0,0,0,0.2)] overflow-hidden border border-slate-100 transform transition-all duration-300">
        
        {{-- <input type="hidden" name="link_id" id="share_link_id">
        <input type="hidden" name="share_method" id="share_method" value="email"> --}}

        <div class="px-8 py-6 border-b border-slate-50 bg-slate-50/30">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-50 text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-black tracking-tight text-slate-900">Partager le lien</h3>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400">Envoyer à un contact</p>
                </div>
            </div>
        </div>

        <div class="p-8">
            <div class="bg-slate-50 border border-slate-100 rounded-xl p-3 mb-6 flex items-center gap-3">
                <div class="h-10 w-10 shrink-0 bg-white rounded-lg border border-slate-100 flex items-center justify-center text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101" />
                    </svg>
                </div>

                <div class="overflow-hidden flex flex-col justify-center">
                    <p class="text-[13px] font-black text-slate-800 truncate leading-tight mb-0.5" id="share_preview_title">
                        
                    </p>
                    <p class="text-[10px] font-medium text-indigo-500/80 truncate lowercase tracking-tight" id="share_preview_url">
                        
                    </p>
                </div>
            </div>

            <div class="flex p-1 mb-6 bg-slate-100 rounded-xl">
                <button type="button" id="tab_email"
                    class="flex-1 py-2 text-sm font-bold rounded-lg shadow-sm transition-all bg-white text-slate-800">
                    Via Email
                </button>
                <button type="button" id="tab_app"
                    class="flex-1 py-2 text-sm font-bold rounded-lg transition-all text-slate-500 hover:text-slate-700">
                    Via Application
                </button>
            </div>

            {{-- <div id="content_email" class="space-y-5 block">
                <div class="space-y-2">
                    <label class="flex items-center gap-2 text-sm font-black text-slate-700">
                        <span>Email du destinataire</span>
                    </label>
                    <input type="email" name="email" 
                        class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 text-slate-900 focus:bg-white focus:border-indigo-400 focus:ring-4 focus:ring-indigo-400/10 transition-all outline-none text-sm font-medium" 
                        placeholder="ami@exemple.com">
                </div>
                <div class="space-y-2">
                    <label class="flex items-center gap-2 text-sm font-black text-slate-700">
                        <span>Message</span>
                        <span class="text-[10px] font-bold text-slate-300 uppercase">(Optionnel)</span>
                    </label>
                    <textarea name="message" rows="2"
                        class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 text-slate-900 focus:bg-white focus:border-indigo-400 focus:ring-4 focus:ring-indigo-400/10 transition-all outline-none text-sm font-medium resize-none" 
                        placeholder="Petit message..."></textarea>
                </div>
            </div> --}}

            <div id="content_email" class="flex flex-col items-center justify-center w-full py-10 px-6 rounded-2xl border-2 border-dashed border-slate-200 bg-slate-50/50 text-center space-y-4">
                <div class="relative">
                    <div class="rounded-full bg-indigo-100 p-4 ring-8 ring-indigo-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="absolute -top-1 -right-2 bg-slate-800 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">404</span>
                </div>
                <div class="max-w-xs mx-auto space-y-1">
                    <h3 class="text-lg font-black text-slate-800">Oups !</h3>
                    <p class="text-sm font-medium text-slate-500">Cette fonctionnalité sera ajoutée prochainement.</p>
                </div>
            </div>

            <form action="#" method="POST" id="content_app" class="space-y-5 hidden">
                <div class="space-y-2">
                    <label class="flex items-center gap-2 text-sm font-black text-slate-700">
                        <span>ID Utilisateur / Pseudo</span>
                    </label>
                    <div class="relative">
                        <input type="text" name="user_id" 
                            class="block w-full rounded-2xl border-slate-200 border bg-slate-50/50 px-4 py-3 pl-11 text-slate-900 focus:bg-white focus:border-indigo-400 focus:ring-4 focus:ring-indigo-400/10 transition-all outline-none text-sm font-medium" 
                            placeholder="#12345 ou username">
                        <span class="absolute left-4 top-3.5 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="border border-indigo-100 bg-indigo-50/30 rounded-3xl p-4 space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold shadow-sm">
                            ?
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-black text-slate-800 leading-tight">En attente de recherche...</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Destinataire</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 p-1 bg-slate-100/50 rounded-2xl">
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="viewer" class="peer hidden" checked>
                            <div class="flex items-center justify-center gap-2 py-2 px-3 rounded-xl text-[11px] font-bold uppercase tracking-tight transition-all peer-checked:bg-white peer-checked:text-indigo-600 peer-checked:shadow-sm text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                Viewer
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="editor" class="peer hidden">
                            <div class="flex items-center justify-center gap-2 py-2 px-3 rounded-xl text-[11px] font-bold uppercase tracking-tight transition-all peer-checked:bg-[#1B294B] peer-checked:text-white peer-checked:shadow-md text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Editor
                            </div>
                        </label>
                    </div>
                </div>
            </form>

            <div class="flex items-center gap-3 pt-6 mt-2">
                <button type="button"
                    id="annuler_ShareLien_Modal_button"
                    class="flex-1 px-6 py-3.5 text-sm font-bold text-slate-500 bg-slate-100 rounded-2xl hover:bg-slate-200 hover:text-slate-700 transition-all active:scale-95">
                    Annuler
                </button>
                <button type="submit" 
                    class="flex-2 bg-[#1B294B] text-white py-3.5 rounded-2xl font-black text-sm tracking-wide hover:bg-slate-800 shadow-lg shadow-indigo-900/10 active:scale-95 transition-all flex items-center justify-center gap-2">
                    <span>Envoyer</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>