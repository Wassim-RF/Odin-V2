<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class link_user extends Pivot
{
    protected $table = 'link_users';
    
    protected $fillable = [
        'user_id',
        'link_id',
        'sender_id',
        'permission'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function link()
    {
        return $this->belongsTo(Links::class, 'link_id');
    }
}
