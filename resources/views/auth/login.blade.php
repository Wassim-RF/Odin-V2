@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-[40px] shadow-sm border border-slate-100 p-10 w-full max-w-[500px] relative">
        <div class="mb-10">
            <h1 class="text-[42px] font-serif text-slate-900 leading-tight">Welcome back</h1>
            <p class="text-slate-500 mt-2 text-lg">Sign in to keep your links organized.</p>
        </div>

        <div class="flex gap-4 p-1.5 bg-slate-50 rounded-[20px] mb-8">
            <a href="/login" class="flex-1 py-3 px-4 bg-blue-600 text-white rounded-2xl font-semibold shadow-md text-center">
                Login
            </a>
            <a href="/register" class="flex-1 py-3 px-4 text-slate-500 font-medium hover:bg-slate-100 rounded-2xl text-center">
                Register
            </a>
        </div>

        <form action="{{ route('auth.login') }}" method="POST" class="space-y-4">
            @csrf
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <input type="email" name="email" placeholder="name@example.com" class="block w-full pl-12 pr-5 py-4 bg-slate-50 border border-slate-200 rounded-[20px] focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-slate-700">
            </div>

            <div class="space-y-2"> 
                <div class="relative flex items-center">
                    <div class="absolute left-5 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <input type="password" name="password" placeholder="********" class="block w-full pl-12 pr-5 py-4 bg-slate-50 border border-slate-200 rounded-[20px] focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-slate-700 leading-tight">
                </div>
                <div class="flex justify-end px-2">
                    <a href="/password/reset" class="text-sm font-medium text-slate-400 hover:text-blue-600 transition-colors">
                        Forgot password?
                    </a>
                </div>
            </div>

            <button type="submit" class="w-full flex items-center justify-center gap-2 py-4 bg-blue-600 text-white rounded-[20px] font-semibold text-lg hover:bg-blue-700 transition shadow-lg shadow-blue-200 mt-2">
                Sign in 
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
        </form>

        <div class="mt-12 flex justify-between items-center text-sm text-slate-400">
            <span>Demo UI</span>
            <span>© 2026 Odin</span>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @if (session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 4000,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(135deg, #ff416c, #ff4b2b)",
                    borderRadius: "12px",
                    padding: "12px 18px",
                    fontWeight: "500",
                    boxShadow: "0 10px 25px rgba(0,0,0,0.15)"
                }
            }).showToast();
        </script>
@endif
</body>
</html>