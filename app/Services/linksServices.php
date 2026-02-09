<?php
    namespace App\Services;

    use App\Models\User;
    use App\Models\Links;

    class LinksServices {
        public function linkNumber() {
            return Links::where('user_id' , session('user_id'))->count();
        }

        public function createLink(array $data) {
            return Links::create($data);
        }

        public function linkInMounth() {
            return Links::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->where('user_id' , session('user_id'))->count();
        }

        public function deleteLink(int $id) {
            return Links::find($id)->delete();
        }

        public function updateLink(int $id , array $data) {
            return Links::find($id)->update($data);
        }

        public function getUserLinksFiltered($search = null, $category = null, $tag = null) {
            return auth()->user()->links()
                ->with(['categorie', 'tags'])

                ->when($search, function ($query) use ($search) {
                    $query->where(function ($q) use ($search) {
                        $q->where('title', 'LIKE', "%{$search}%")
                        ->orWhere('url', 'LIKE', "%{$search}%");
                    });
                })

                ->when($category && $category !== 'all', function ($query) use ($category) {
                    $query->where('categories_id', $category);
                })

                ->when($tag, function ($query) use ($tag) {
                    $query->whereHas('tags', function ($q) use ($tag) {
                        $q->where('tags.id', $tag);
                    });
                })

                ->latest()
                ->get();
        }

    }
