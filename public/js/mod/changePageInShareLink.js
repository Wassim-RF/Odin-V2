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