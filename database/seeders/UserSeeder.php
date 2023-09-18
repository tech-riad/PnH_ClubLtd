<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::updateOrCreate([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt(87654321),

        ]);
    }
}
