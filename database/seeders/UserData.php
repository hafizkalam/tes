<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123'),
                'level' => 1,
            ],
            [
                'name' => 'Tenant',
                'username' => 'tenant',
                'email' => 'tenant@tenat.com',
                'password' => bcrypt('123'),
                'level' => 2,
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
