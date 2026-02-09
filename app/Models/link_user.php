<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class link_user extends Model
{
    protected $fillable = [
        'user_id',
        'link_id',
        'permission'
    ];
}
