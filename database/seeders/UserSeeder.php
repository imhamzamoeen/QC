<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserAttributes;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Haamzaaa',
            'email'=>'haamzaaay@gmail.com',
            'password'=>'12345678',
        ]);
        UserAttributes::updateOrCreate([
            'user_type' => 'super-admin',
            'user_id' => $user->id
        ]);
    }
}
