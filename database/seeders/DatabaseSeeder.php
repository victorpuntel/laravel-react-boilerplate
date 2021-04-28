<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Test user',
            'email' => 'test@user.com',
            'email_verified_at' => null,
            'password' => bcrypt('secret')
        ]);
    }
}
