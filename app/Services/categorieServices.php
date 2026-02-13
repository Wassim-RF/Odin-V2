<?php
    namespace App\Services;

    use App\Models\ActivityLog;
    use App\Models\User;
    use App\Models\Categories;

    class CategorieServices {
        public function categorieNumber() {
            return Categories::where('user_id' , session('user_id'))->count();
        }

        public function createCategorie(array $data) {
            $categorie = Categories::create($data);
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "add",
                'subject_type' => "categorie",
                'subject_id' => $categorie->id
            ]);
            return $categorie;
        }
        
        public function getUserCategorie() {
            return Categories::where('user_id' , session('user_id'))->get();
        }

        public function updateCategorie(int $id , array $data) {
            $categorie = Categories::find($id)->update($data);
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "update",
                'subject_type' => "categorie",
                'subject_id' => $categorie->id
            ]);
            return $categorie;
        }

        public function deleteCategorie(int $id) {
            $categorie = Categories::find($id)->delete();
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "delete",
                'subject_type' => "categorie",
                'subject_id' => $categorie->id
            ]);
            return $categorie;
        }

        public function getCategorieByTitle(int $id) {
            return Categories::find($id);
        }

        public function getUserCategoriesWithSearch($search = null) {
            return auth()->user()->categories()
                ->when($search, function ($query) use ($search) {
                    $query->where('title', 'LIKE', "%{$search}%");
                })
                ->withCount('links')
                ->latest()
                ->get();
        }
    }
