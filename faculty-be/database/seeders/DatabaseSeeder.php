<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@admin',
            'password' => 'admin',
            'role' => 'Admin',
            'profile' => 'image.jpg'
        ],
    );
    DB::table('users')->insert([
        'name' => "Elsa",
        'email' => 'user@gmail.com',
        'password' => 'user',
        'role' => 'Teacher',
        'profile' => 'image.jpg'
    ],
);
    }
}
