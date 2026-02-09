@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-[40px] shadow-sm border border-slate-100 p-10 w-full max-w-[500px] relative">
        <div class="mb-10">
            <h1 class="text-[42px] font-serif text-slate-900 leading-tight">Welcome back</h1>
            <p class="text-slate-500 mt-2 text-lg">Sign in to keep your links organized.</p>
        </div>

        <div class="flex gap-4 p-1.5 bg-slate-50 rounded-[20px] mb-8">
            <a href="/login" class="flex-1 py-3 px-4 text-slate-500 font-medium hover:bg-slate-100 rounded-2xl text-center">
                Login
            </a>
            <a href="/register" class="flex-1 py-3 px-4 bg-blue-600 text-white rounded-2xl font-semibold shadow-md text-center">
                Register
            </a>
        </div>

        <form action="{{ route('auth.register') }}" method="POST" class="space-y-4">
            @csrf
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400" viewBox="0 0 20 20"><path fill="currentColor" d="M9.993 10.573a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9ZM10 0a6 6 0 0 1 3.04 11.174c3.688 1.11 6.458 4.218 6.955 8.078c.047.367-.226.7-.61.745c-.383.045-.733-.215-.78-.582c-.54-4.19-4.169-7.345-8.57-7.345c-4.425 0-8.101 3.161-8.64 7.345c-.047.367-.397.627-.78.582c-.384-.045-.657-.378-.61-.745c.496-3.844 3.281-6.948 6.975-8.068A6 6 0 0 1 10 0Z"/></svg>
                </div>
                <input type="text" name="name" placeholder="Nom Complete" class="block w-full pl-12 pr-5 py-4 bg-slate-50 border border-slate-200 rounded-[20px] focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-slate-700">
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <input type="email" name="email" placeholder="Email" class="block w-full pl-12 pr-5 py-4 bg-slate-50 border border-slate-200 rounded-[20px] focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-slate-700">
            </div>

            <div class="relative flex items-center">
                <div class="absolute left-5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <input type="password" name="password" placeholder="Mot de passe" class="block w-full pl-12 pr-5 py-4 bg-slate-50 border border-slate-200 rounded-[20px] focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-slate-700 leading-tight">
            </div>
            <div class="relative flex items-center">
                <div class="absolute left-5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <input type="password" name="password_confirmation" placeholder="Confirmer mot de passe" class="block w-full pl-12 pr-5 py-4 bg-slate-50 border border-slate-200 rounded-[20px] focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-slate-700 leading-tight">
            </div>

            <button type="submit" class="w-full flex items-center justify-center gap-2 py-4 bg-blue-600 text-white rounded-[20px] font-semibold text-lg hover:bg-blue-700 transition shadow-lg shadow-blue-200 mt-2">
                Register
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
        </form>

        <div class="mt-12 flex justify-between items-center text-sm text-slate-400">
            <span>Demo UI</span>
            <span>© 2026 Odin</span>
        </div>
    </div>

    @if (session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "left",
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        </script>
    @endif
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>