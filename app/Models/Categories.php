<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function links() {
        return $this->hasMany(Links::class);
    }
}
