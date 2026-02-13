<?php
    namespace App\Services;

    use App\Models\ActivityLog;
    use App\Models\Tags;

    class TagServices {
        public function tagNumber() {
            return Tags::where('user_id' , session('user_id'))->count();
        }

        public function createTag(array $data) {
            $tag = Tags::create($data);
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "add",
                'subject_type' => "tag",
                'subject_id' => $tag->id
            ]);
            return $tag;
        }

        public function deleteTag(int $id) {
            $tag = Tags::find($id)->delete();
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'action' => "delete",
                'subject_type' => "tag",
                'subject_id' => $tag->id
            ]);
            return $tag;
        }
    }
