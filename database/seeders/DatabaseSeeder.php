<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'eko123',
            'email' => 'eko123@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => bcrypt('07522'),
            'is_admin' => true
        ]);

        User::factory()->create([
            'name' => 'rio321',
            'email' => 'rio321@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => bcrypt('07515'),
            'is_admin' => false
        ]);
    }
}
