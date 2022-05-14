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
            'name' => "Eleasar Y. Patot",
            'email' => 'patoteleasar@gmail.com',
            'password' => '09358778896',
            'role' => 'Admin',
            'profile' => 'sample.jpeg'
        ]);
    }
}
