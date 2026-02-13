<div class="group relative flex items-start gap-4">
    <div class="absolute left-0 flex items-center justify-center w-8 h-8 rounded-full {{ $activityColors[$activity->action] }} ring-4 ring-white z-10">
        {!! $activityIcons[$activity->action] !!}
    </div>
    
    <div class="ml-12 flex-1">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm font-bold text-slate-800">{{ $activityTitles[$activity->action][$activity->subject_type] }}</p>
                <p class="text-[11px] text-slate-500 font-medium">{{ $activity->getMessageAttribute($activity->user_id , $activity->subject_type , $activity->subject_id , $activity->action) }}</p>
            </div>
            <span class="text-[10px] text-slate-400 whitespace-nowrap">Il y a 2 min</span>
        </div>
    </div>
</div>