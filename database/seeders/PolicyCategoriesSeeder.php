<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolicyCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query ="INSERT INTO `policy_cateogries` (`id`, `sub_category_name`, `cateogry`, `comapnies_id`, `created_at`, `updated_at`) VALUES
        (1, 'ultimate_preferred_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (2, 'super_preferred_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (3, 'preferred_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (4, 'standard_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (5, '20pay_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (6, 'modified_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (7, 'easy_issue_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (8, 'gauranteed_issue_whole_life', 'whole', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (9, '20years_term_M', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (10, '20years_term_F', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (11, '20years_term_M_10000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (12, '20years_term_F_10000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (13, '20years_term_M_20000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (14, '20years_term_F_20000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (15, '20years_term_M_30000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (16, '20years_term_F_30000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (17, '20years_term_M_40000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (18, '20years_term_F_40000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (19, '20years_term_M_50000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL),
        (20, '20years_term_F_50000', 'term', '6d171d10-6de8-11ec-90d6-0242ac120003', NULL, NULL);";

        DB::statement($query);
    }
}
