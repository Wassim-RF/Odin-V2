<tr class="hover:bg-slate-50/80 transition-colors group">
    <td class="px-8 py-4">
        <div class="flex items-center gap-4">
            @if ($user->is_active)
                <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-black text-xs">
                    JD
                </div>
            @else
                <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                </div>
            @endif
            <div class="flex flex-col">
                <span class="font-bold text-slate-900 text-sm {{ $user->is_active ? "" : "line-through decoration-slate-300" }}">{{ $user->name }}</span>
                <span class="text-xs text-slate-500 font-medium">{{ $user->email }}</span>
            </div>
        </div>
    </td>
    <td class="px-8 py-4">
        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold {{ ($user->roles->first()->name === 'admin') ? "bg-slate-100" : "bg-white"  }} text-slate-{{ ($user->roles->first()->name === 'admin') ? "600" : "400" }} border border-slate-200">
            {{ ucfirst($user->roles->first()->name) }}
        </span>
    </td>
    <td class="px-8 py-4">
        @if($user->is_active)
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-emerald-50 text-emerald-600 border border-emerald-100">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                Actif
            </span>
        @else
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-rose-50 text-rose-500 border border-rose-100">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                </svg>
                Inactif
            </span>
        @endif
    </td>
    <td class="px-8 py-4">
        <span class="text-sm font-bold text-slate-500">{{ $user->created_at->translatedFormat('l d M Y') }}</span>
    </td>
    <td class="px-8 py-4 text-right">
        @if ($user->roles->first()->name !== 'admin')
            @if ($user->is_active)
                <button class="text-xs font-bold text-slate-400 hover:text-slate-900 bg-white hover:bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg transition-all mr-2">
                    Éditer
                </button>
                <form action="{{ route('user.desactive') }}" method="POST" class="inline-block">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <button class="text-xs font-bold text-rose-500 hover:text-rose-700 bg-rose-50 hover:bg-rose-100 border border-rose-100 px-3 py-1.5 rounded-lg transition-all">
                        Désactiver
                    </button>
                </form>
            @else
                <button class="text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 hover:bg-emerald-100 border border-emerald-100 px-3 py-1.5 rounded-lg transition-all">
                    Réactiver
                </button>
            @endif
        @endif
    </td>
</tr>