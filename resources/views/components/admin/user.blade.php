<tr class="hover:bg-slate-50/30 transition-colors">
    <td class="px-8 py-4">
        <div class="flex items-center gap-3">
            <img src="https://ui-avatars.com/api/?name=Mehdi+A&background=f43f5e&color=fff" class="w-8 h-8 rounded-full shadow-sm" alt="">
            <span class="text-sm font-bold text-slate-700">{{ $user->name }}</span>
        </div>
    </td>
    <td class="px-8 py-4 text-sm text-slate-500">{{ $user->email }}</td>
    <td class="px-8 py-4"><span class="px-2 py-0.5 text-[10px] font-bold {{ ($user->roles->first()->name === 'admin') ? 'bg-rose-100 text-rose-600' : 'bg-slate-100 text-slate-600' }}  rounded-md">{{ $user->roles->first()->name }}</span></td>
    <td class="px-8 py-4 text-sm text-slate-400">Aujourd'hui, 14:20</td>
</tr>