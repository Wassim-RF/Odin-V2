<?php
    namespace App\Services;

    use App\Models\Roles;
    use App\Models\User;

    class AuthServices {
        public function createAccount(array $data) {
            $user = User::create($data);
            $role = Roles::where('name' , 'admin')->first();
            $user->roles()->attach($role->id);
            return $user;
        }
    }