<?php

namespace App\Http\Controllers;

use App\Services\AdminServices;
use App\Services\userServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(AdminServices $adminServices) {
        $userCount = $adminServices->usersCount();
        $linksCount = $adminServices->linksCount();
        $tagsCount = $adminServices->tagsCount();
        $categoriesCount = $adminServices->categoriesCount();
        $lastFiveUser = $adminServices->lastFiveUser();
        $lastFiveActivity = $adminServices->lastFiveActivity();
        
        // Activity Icons & Colors 
        $activityIcons = [
            'add' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>',

            'delete' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="3 6 5 6 21 6" />
                <path d="M19 6L18.3 19.3A2 2 0 0 1 16.3 21H7.7A2 2 0 0 1 5.7 19.3L5 6" />
                <line x1="10" y1="11" x2="10" y2="17" />
                <line x1="14" y1="11" x2="14" y2="17" />
            </svg>',

            'update' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4v6h6M20 20v-6h-6M4 14a8 8 0 0 0 16 0 8 8 0 0 0-16 0Z" />
            </svg>',

            'register' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-8 0v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>',

            'share' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="18" cy="5" r="3" />
                <circle cx="6" cy="12" r="3" />
                <circle cx="18" cy="19" r="3" />
                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49" />
                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49" />
            </svg>',

            'restore' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 12a9 9 0 1 0 9-9v4l5-5-5-5v4a9 9 0 0 0-9 9z" />
            </svg>',
        ];
        $activityColors = [
            'add'      => 'bg-red-50 text-red-500',
            'delete'   => 'bg-pink-50 text-pink-500',
            'update'   => 'bg-yellow-50 text-yellow-500',
            'register' => 'bg-green-50 text-green-500',
            'share'    => 'bg-blue-50 text-blue-500',
            'restore'  => 'bg-purple-50 text-purple-500',
        ];
        $activityTitles = [
            'add' => [
                'link'      => 'Lien ajouté',
                'categorie' => 'Catégorie ajoutée',
                'account'   => 'Compte ajouté',
                'tag'       => 'Tag ajouté',
            ],
            'delete' => [
                'link'      => 'Lien supprimé',
                'categorie' => 'Catégorie supprimée',
                'account'   => 'Compte supprimé',
                'tag'       => 'Tag supprimé',
            ],
            'update' => [
                'link'      => 'Lien modifié',
                'categorie' => 'Catégorie modifiée',
                'account'   => 'Compte modifié',
                'tag'       => 'Tag modifié',
            ],
            'register' => [
                'account'   => 'Compte enregistré',
            ],
            'share' => [
                'link'      => 'Lien partagé',
                'categorie' => 'Catégorie partagée',
                'account'   => 'Compte partagé',
                'tag'       => 'Tag partagé',
            ],
            'restore' => [
                'link'      => 'Lien restauré',
                'categorie' => 'Catégorie restaurée',
                'account'   => 'Compte restauré',
                'tag'       => 'Tag restauré',
            ],
        ];

        return view('admin.dashboard' , compact('userCount' , 'categoriesCount' , 'linksCount' , 'tagsCount' , 'lastFiveUser' , 'activityIcons' , 'activityColors' , 'lastFiveActivity' , 'activityTitles'));
    }

    public function showUsers(AdminServices $adminServices) {
        $usersPagination = $adminServices->getUsersByPagination();
        return view('admin.utilisateur' , compact('usersPagination'));
    }

    public function desactiveUSer(userServices $userServices , Request $request) {
        $userServices->disactiveUser((int) $request->user_id);

        return redirect()->back();
    }
}
