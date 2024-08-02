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
        // \App\Models\User::factory(10)->create();
        $this->call(RolePermissionSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(AdbSeeder::class);
        $this->call(ChildRiderSeeder::class);
        $this->call(PolicyCategoriesSeeder::class);
        $this->call(TermCategoriesSeeder::class);
        $this->call(TestQuoteSeeder::class);
        $this->call(WholeTermSeeder::class);
        $this->call(PaymentOptionSeeder::class);
        $this->call(ZipCodesSeeder::class);
    }
}
