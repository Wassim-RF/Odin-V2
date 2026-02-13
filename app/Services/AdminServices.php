<?php
    namespace App\Services;

    use App;
    use App\Models\ActivityLog;
    use App\Models\Categories;
    use App\Models\Links;
    use App\Models\Tags;
    use App\Models\User;

    class AdminServices {
        public function usersCount() {
            return User::all()->count();
        }

        public function linksCount() {
            return Links::all()->count();
        }

        public function tagsCount() {
            return Tags::all()->count();
        }

        public function categoriesCount() {
            return Categories::all()->count();
        }

        public function lastFiveUser() {
            return User::latest()->limit(5)->get();
        }

        public function lastFiveActivity() {
            return ActivityLog::latest()->limit(5)->get();
        }
        // public function getMessageAttribute($userId , $subject_type , $subject_id , $action) {
        //     $actions = [
        //         'add' => 'ajouté',
        //         'delete' => 'supprimé',
        //         'update' => 'modifié',
        //         'register' => "inscrit",
        //         'share' => 'partagé',
        //         'restore' => 'restauré'
        //     ];

        //     $user = User::find($userId);
        //     $userName = $user ? $user->name : 'Utilisateur inconnu';

        //     $subjectModel = null;
        //     switch($subject_type) {
        //         case 'link':
        //             $subjectModel = App\Models\Links::find($subject_id);
        //             break;
        //         case 'categorie':
        //             $subjectModel = App\Models\Categories::find($subject_id);
        //             break;
        //         case 'account':
        //             $subjectModel = App\Models\User::find($subject_id);
        //             break;
        //         case 'tag':
        //             $subjectModel = App\Models\Tags::find($subject_id);
        //             break;
        //     }

        //     if ($subjectModel) {
        //         $label = $subjectModel->title ?? $subjectModel->name ?? 'élément';
        //     } else {
        //         $label = 'élément';
        //     }

        //     $type = $subject_type;

        //     return "$userName a {$actions[$action]} $type \"$label\"";
        // }

        public function getUsersByPagination() {
            $users = User::paginate(10);

            return $users;
        }
    }