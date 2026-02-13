<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'user_id',
        'action',
        'subject_type',
        'subject_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getMessageAttribute($userId , $subject_type , $subject_id , $action) {
            $actions = [
                'add' => 'ajouté',
                'delete' => 'supprimé',
                'update' => 'modifié',
                'register' => "inscrit",
                'share' => 'partagé',
                'restore' => 'restauré'
            ];

            $user = User::find($userId);
            $userName = $user ? $user->name : 'Utilisateur inconnu';

            $type = $subject_type;

            return "$userName a {$actions[$action]} $type.";
        }

}
