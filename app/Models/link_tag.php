<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class link_tag extends Model
{
    protected $fillable = [
        'link_id',
        'tag_id'
    ];
}
