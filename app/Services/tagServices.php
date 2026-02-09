<?php
    namespace App\Services;

    use App\Models\User;
    use App\Models\Tags;

    class TagServices {
        public function tagNumber() {
            return Tags::where('user_id' , session('user_id'))->count();
        }

        public function createTag(array $data) {
            return Tags::create($data);
        }

        public function deleteTag(int $id) {
            return Tags::find($id)->delete();
        }
    }
