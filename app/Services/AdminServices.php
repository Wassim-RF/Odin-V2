<?php
    namespace App\Services;

    use App;
    use App\Models\ActivityLog;
    use App\Models\Categories;
    use App\Models\Links;
    use App\Models\Tags;
    use App\Models\User;

    class AdminServices {
        public function usersCount() {
            return User::all()->count();
        }

        public function linksCount() {
            return Links::all()->count();
        }

        public function tagsCount() {
            return Tags::all()->count();
        }

        public function categoriesCount() {
            return Categories::all()->count();
        }

        public function lastFiveUser() {
            return User::latest()->limit(5)->get();
        }

        public function lastFiveActivity() {
            return ActivityLog::latest()->limit(5)->get();
        }
    }