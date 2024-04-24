<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $data = [
            [
                'name' => 'sohel',
                'email' => 'sohel.akter@miaki.co',
                'role_name' => 'super_admin',
                'password' => Hash::make('sohel.akter'),
            ]
        ];

        DB::table('admins')->insert($data);
    }
}
