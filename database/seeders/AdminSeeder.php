<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserAttributes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 123456789,
        ]);
        UserAttributes::updateOrCreate([
            'user_type' => 'super_admin',
            'user_id' => $user->id
        ]);

        $user->assignRole('super_admin');
    }
}
