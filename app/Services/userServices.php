<?php
    namespace App\Services;

    use App\Models\User;

    class userServices {
        public function existeUser(string $email) {
            return User::where('email' , $email)->first();
        }
    }
