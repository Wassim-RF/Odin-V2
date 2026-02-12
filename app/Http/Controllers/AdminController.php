<?php

namespace App\Http\Controllers;

use App\Services\AdminServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(AdminServices $adminServices) {
        $userCount = $adminServices->usersCount();
        $linksCount = $adminServices->linksCount();
        $tagsCount = $adminServices->tagsCount();
        $categoriesCount = $adminServices->categoriesCount();
        $lastFiveUser = $adminServices->lastFiveUser();
        return view('admin.dashboard' , compact('userCount' , 'categoriesCount' , 'linksCount' , 'tagsCount' , 'lastFiveUser'));
    }
}
