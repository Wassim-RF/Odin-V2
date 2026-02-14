<?php
    namespace App\Services;

    use App\Models\User;

    class userServices {
        public function existeUser(string $email) {
            return User::where('email' , $email)->first();
        }

        public function disactiveUser(int $id) {
            $user = User::find($id);
            // dd($user ->update([
            //     'is_active' => 0
            // ]));
            return $user->update([
                'is_active' => true
            ]);
        }

        public function activeUser(int $id) {
            return User::find($id)->update([
                'is_active' => false
            ]);
        }
    }
