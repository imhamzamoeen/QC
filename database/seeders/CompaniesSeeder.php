<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `comapnies` (`id`, `name`, `image`, `semi_annual_factor`, `monthly_annual_factor`, `policy_fee_term`, `annual_fee`, `semi_annual_fee`, `monthly_fee`, `deleted_at`, `created_at`, `updated_at`, `email`, `features`) VALUES
        ('6d171d10-6de8-11ec-90d6-0242ac120003', 'Senior Life insurance company', 'senior_life.png', 0.52, 0.085, 98, 36, 18.72, 3.06, NULL, '2022-01-05 05:36:12', '2022-01-05 05:36:17', 'haamzaaay@gmail.com', 'no waiting time,no incrementm,rate fix, no extra charges'),
        ('7b58bd8c-6dea-11ec-90d6-0242ac120003', 'microfast', 'Company_Default.png', 0.52, 0.085, 98, 36, 18.72, 3.06, NULL, NULL, NULL, 'info@microfast.com', 'not any');";

        DB::statement($query);
    }
}
