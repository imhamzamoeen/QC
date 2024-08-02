<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildRiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `child_riders` (`id`, `type`, `whole_term_life`, `pay20`, `comapnies_id`, `created_at`, `updated_at`) VALUES
        ('c94cf778-6deb-11ec-90d6-0242ac120003', 'Monthly', 0.4, 0.45, '6d171d10-6de8-11ec-90d6-0242ac120003', '2022-01-05 05:53:53', '2022-01-05 05:53:53'),
        ('c94cfa2a-6deb-11ec-90d6-0242ac120003', 'Quarterly', 1.25, 1.4, '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        ('c94cfec6-6deb-11ec-90d6-0242ac120003', 'Semi-Annual', 2.45, 2.75, '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        ('c94cfffc-6deb-11ec-90d6-0242ac120003', 'Annual', 4.71, 5.3, '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL);";

        // DB::statement($query);
    }
}
