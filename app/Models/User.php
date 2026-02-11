<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function categories() {
        return $this->hasMany(Categories::class);
    }

    public function roles() {
        return $this->belongsToMany(Roles::class , 'role_user');
    }

    public function tags() {
        return $this->hasMany(Tags::class);
    }

    public function links() {
        return $this->hasMany(Links::class);
    }

    public function favoriteLinks() {
        return $this->belongsToMany(Links::class, 'favorites');
    }

    public function sharedLinks() {
        return $this->belongsToMany(Links::class , 'link_users' , 'user_id' , 'link_id')->withPivot('permission')->withTimestamps();
    }

    public function activities() {
        return $this->hasMany(ActivityLog::class);
    }
}
