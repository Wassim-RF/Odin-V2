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
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "add",
                'subject_type' => "categorie"
            ]);
            return Categories::create($data);
        }
        
        public function getUserCategorie() {
            return Categories::where('user_id' , session('user_id'))->get();
        }

        public function updateCategorie(int $id , array $data) {
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "update",
                'subject_type' => "categorie"
            ]);
            return Categories::find($id)->update($data);
        }

        public function deleteCategorie(int $id) {
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "delete",
                'subject_type' => "categorie"
            ]);
            return Categories::find($id)->delete();
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
