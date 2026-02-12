<?php
    namespace App\Services;

    use App\Models\User;
    use App\Models\Links;

    class LinksServices {
        public function linkNumber() {
            return Links::where('user_id' , session('user_id'))->count();
        }

        public function createLink(array $data) {
            $link = Links::create($data);

            $linkUserData = [
                'user_id' => auth()->user()->id,
                'sender_id' => auth()->user()->id,
                'link_id' => $link->id,
                'permission' => 'editor'
            ];

            \DB::table('link_users')->insert($linkUserData);
            return $link;
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

        public function shareLinkInApp(string $userInput, int $senderId , int $linkId , string $permission) {
            $targetedUser = User::where('id', $userInput)
                ->orWhere('name', $userInput)
                ->firstOrFail();

            $targetedUser->sharedLinks()->syncWithoutDetaching([
                $linkId => [
                    'permission' => $permission,
                    'sender_id' => $senderId
                ]
            ]);
        }

        // public function shareLinkInApp(int $targetedUserId , int $targetedLinkId , string $permission)  {
        //     dd($targetedUserId, $targetedLinkId, $permission);
        // }

        public function  sendLinkInfo(int $id) {
            return Links::with(['sharedUsers' => function ($query) use ($id) {
                $query->where('link_users.sender_id', $id);
            }])->get();
        }


    }
