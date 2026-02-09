<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LinksServices;
use App\Services\CategorieServices;
use App\Services\TagServices;

class userController extends Controller
{
    public function index() {
        return redirect('/login');
    }

    public function showHome(LinksServices $linksServices , CategorieServices $categorieServices , TagServices $tagServices) {
        $linkNumber = $linksServices->linkNumber();
        $categorieNumber = $categorieServices->categorieNumber();
        $tagNumber = $tagServices->tagNumber();
        $linkInLastMounth = $linksServices->linkInMounth();
        return view('home' , compact('linkNumber' , 'categorieNumber' , 'tagNumber' , 'linkInLastMounth'));
    }

}
