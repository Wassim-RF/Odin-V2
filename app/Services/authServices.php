<?php
    namespace App\Services;

    use App\Models\User;

    class AuthServices {
        public function createAccount(array $data) {
            return User::create($data);
        }
    }