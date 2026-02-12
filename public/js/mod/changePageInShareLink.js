export function toEmailParte() {
    const contentEmail = document.getElementById('content_email');
    const contentApp = document.getElementById('content_app');
    const btnEmail = document.getElementById('tab_email');
    const btnApp = document.getElementById('tab_app');
    const activeClass = "bg-white text-slate-800 shadow-sm";
    const inactiveClass = "text-slate-500 hover:text-slate-700 bg-transparent shadow-none";

    contentApp.classList.replace("block" , "hidden");
    contentEmail.classList.replace("hidden" , "flex");
    btnEmail.className = "flex-1 py-2 text-sm font-bold rounded-lg transition-all " + activeClass;
    btnApp.className = "flex-1 py-2 text-sm font-bold rounded-lg transition-all " + inactiveClass;
}

export function toAppPart() {
    const contentEmail = document.getElementById('content_email');
    const contentApp = document.getElementById('content_app');
    const btnEmail = document.getElementById('tab_email');
    const btnApp = document.getElementById('tab_app');
    const activeClass = "bg-white text-slate-800 shadow-sm";
    const inactiveClass = "text-slate-500 hover:text-slate-700 bg-transparent shadow-none";

    contentEmail.classList.replace("flex" , "hidden");
    contentApp.classList.replace("hidden" , "block");
    btnApp.className = "flex-1 py-2 text-sm font-bold rounded-lg transition-all " + activeClass;
    btnEmail.className = "flex-1 py-2 text-sm font-bold rounded-lg transition-all " + inactiveClass;
}

export function sharePageToRecuPage() {
    const sectionRecus = document.getElementById('section-recus');
    const sectionEnvoyes = document.getElementById('section-envoyes');
    const btnRecus = document.getElementById('tab-recus');
    const btnEnvoyes = document.getElementById('tab-envoyes');

    sectionRecus.classList.replace('hidden' , 'grid');
    sectionEnvoyes.classList.replace('grid' , 'hidden');
    btnRecus.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all bg-[#1B294B] text-white shadow-lg";
    btnEnvoyes.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all text-slate-500 hover:text-slate-800";
}

export function sharePageToEnvoiPage() {
    const sectionRecus = document.getElementById('section-recus');
    const sectionEnvoyes = document.getElementById('section-envoyes');
    const btnRecus = document.getElementById('tab-recus');
    const btnEnvoyes = document.getElementById('tab-envoyes');
    
    sectionEnvoyes.classList.replace('hidden' , 'grid');
    sectionRecus.classList.replace('grid' , 'hidden');
    btnEnvoyes.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all bg-[#1B294B] text-white shadow-lg";
    btnRecus.className = "px-8 py-2.5 rounded-xl text-xs font-black uppercase tracking-widest transition-all text-slate-500 hover:text-slate-800";
}