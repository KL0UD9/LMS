<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Wipe out any existing users (and reset the auto‐increment)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 2. Create a regular user
        User::factory()->create([
            'name'      => 'Kloud',
            'email'     => 'kloud@gmail.com',
            'password'  => Hash::make('12345678910'),
            'usertype'  => 'user',      // ← old column
        ]);

        // 3. Create an admin user
        User::factory()->create([
            'name'      => 'Sunchung',
            'email'     => 'sunchungadmin@gmail.com',
            'password'  => Hash::make('12345678910@'),
            'usertype'  => 'admin',     // ← old column
        ]);
    }
}
