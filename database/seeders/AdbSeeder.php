<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `adb_riders` (`id`, `lower_limit`, `upper_limit`, `annual_rate`, `comapnies_id`, `created_at`, `updated_at`) VALUES
        ('7b58b95e-6dea-11ec-90d6-0242ac120003', 0, 55, 1.5, '6d171d10-6de8-11ec-90d6-0242ac120003', '2022-01-05 05:43:47', '2022-01-05 05:43:47'),
        ('7b58bc24-6dea-11ec-90d6-0242ac120003', 56, 60, 2, '6d171d10-6de8-11ec-90d6-0242ac120003', '2022-01-05 05:43:47', '2022-01-05 05:43:47'),
        ('7b58bd8c-6dea-11ec-90d6-0242ac120003', 61, 65, 2.5, '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        ('7b58c174-6dea-11ec-90d6-0242ac120003', 66, 70, 3.25, '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        ('7b58c2aa-6dea-11ec-90d6-0242ac120003', 71, 75, 4.5, '6d171d10-6de8-11ec-90d6-0242ac120003', '2022-01-05 05:46:23', '2022-01-05 05:46:23'),
        ('7b58c3ea-6dea-11ec-90d6-0242ac120003', 76, 80, 6.5, '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        ('7b58c52a-6dea-11ec-90d6-0242ac120003', 81, 85, 9, '6d171d10-6de8-11ec-90d6-0242ac120003', '2022-01-05 05:49:54', '2022-01-05 05:49:54')";

        // DB::statement($query);
    }
}
