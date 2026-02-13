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

            $subjectModel = null;
            switch($subject_type) {
                case 'link':
                    $subjectModel = Links::find($subject_id);
                    break;
                case 'categorie':
                    $subjectModel = Categories::find($subject_id);
                    break;
                case 'tag':
                    $subjectModel = Tags::find($subject_id);
                    break;
            }

            if ($subjectModel) {
                $label = $subjectModel->title ?? $subjectModel->name ?? 'élément';
            } else {
                $label = '';
            }

            $type = $subject_type;

            return "$userName a {$actions[$action]} un(e) $type \"$label\"";
        }

}
