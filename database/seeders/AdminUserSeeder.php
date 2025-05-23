<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        
    }
}User::create([
    'name' => env('ADMIN_NAME', 'Admin'),
    'email' => env('ADMIN_EMAIL', 'admin@keytopia.com'),
    'password' => bcrypt(env('ADMIN_PASSWORD', 'admin123')),
    'is_admin' => true
]);