<?php
    namespace App\Services;

    use App\Models\ActivityLog;
    use App\Models\Roles;
    use App\Models\User;

    class AuthServices {
        public function createAccount(array $data) {
            $user = User::create($data);
            $role = Roles::where('name' , 'user')->first();
            $user->roles()->attach($role->id);
            ActivityLog::create([
                'user_id' => $user->id,
                'action' => "register",
                'subject_type' => "account",
                'subject_id' => $user->id
            ]);
            return $user;
        }
    }