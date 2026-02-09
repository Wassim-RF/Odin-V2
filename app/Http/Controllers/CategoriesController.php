<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategorieServices;
use App\Http\Requests\categorieRequest;

class CategoriesController extends Controller
{
    public function index(Request $request, CategorieServices $categorieServices) {
    $categories = $categorieServices->getUserCategoriesWithSearch($request->search);

    return view('categories.categories', compact('categories'));
    }

    public function showCategorie($id , CategorieServices $categorieServices) {
        $categorie = $categorieServices->getCategorieByTitle((int) $id);
        return view('categories.showCategorie' , compact('categorie'));
    }

    public function store(categorieRequest $categorieRequest , CategorieServices $categorieServices) {
        $data = [
            'title' => $categorieRequest->categorie_title,
            'description' => $categorieRequest->categorie_description,
            'user_id' => auth()->user()->id
        ];

        $categorieServices->createCategorie($data);

        return redirect()->back()->with('success' , 'La categorie est creer en success');
    }

    public function update(categorieRequest $categorieRequest , CategorieServices $categorieServices) {
        $data = [
            'title' => $categorieRequest->categorie_title,
            'description' => $categorieRequest->categorie_description
        ];

        $categorieServices->updateCategorie($categorieRequest->categorie_id , $data);

        return redirect()->back();
    }

    public function destroy(Request $request , CategorieServices $categorieServices) {
        if($request->categorie_id) {
            $categorieServices->deleteCategorie($request->categorie_id);
            return redirect()->back();
        }
        return redirect()->back();
    }
}
