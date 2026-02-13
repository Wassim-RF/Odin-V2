<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function user() {
        return $this->belongsToMany(User::class , 'role_user' , 'roles_id' , 'user_id');
    }
}
