<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => "admin@odin.com",
            'password' => "admin123"
        ]);
        $role = Roles::where('name' , 'admin')->first();
        $user->roles()->attach($role->id);
    }
}
