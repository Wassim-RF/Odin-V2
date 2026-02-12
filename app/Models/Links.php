<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $fillable = [
        'title',
        'url',
        'categories_id',
        'user_id'
    ];
    
    public function categorie() {
        return $this->belongsTo(Categories::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tags() {
        return $this->belongsToMany(Tags::class);
    }

    public function favoredByUsers() {
        return $this->belongsToMany(User::class, 'favorites' , 'link_id' , 'user_id')->withTimestamps();
    }

    public function sharedUsers() {

        return $this->belongsToMany(User::class, 'link_users', 'link_id', 'user_id')
            ->using(link_user::class)
            ->withPivot('permission', 'sender_id')
            ->withTimestamps();
    }
}
