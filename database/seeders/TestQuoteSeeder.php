<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestQuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `test_quote_policies` (`id`, `image`, `company_name`, `company_email`, `basic_amount`, `features`, `age`, `created_at`, `updated_at`, `lower_age`, `upper_age`) VALUES
        ('0640d698-9d19-49ff-a5be-e6440ec83d57', '8b37211621.png', 'Geo Blue', 'info@geoblue.com', 20, 'Policy Never Expires,Coverage Never Decreases,No 2 Year Waiting Period,', '', '2021-12-27 00:05:26', '2021-12-27 00:05:26', 20, 120),
        ('5272f202-56c2-45c1-8482-4853fa0d415b', '2f1613d55d.png', 'cigna', 'info@cigna.com', 10, 'Policy Never Expires,Premiums Never Increase,Coverage Never Decreases,', '', '2021-12-27 00:18:51', '2021-12-27 00:18:51', 30, 120),
        ('6c3c87c6-f546-4646-90cd-884b5a193e5a', 'c839542717.jfif', 'brown_boy', 'infor@brown.com', 18, 'Premiums Never Increase,No Medical Exam Required,', '', '2021-12-27 05:22:56', '2021-12-27 05:22:56', 0, 120),
        ('6d076963-90ba-4391-a39d-9564c6a36187', 'bdedc2948a.jfif', 'verint', 'info@verint.com', 15, 'Policy Never Expires,Premiums Never Increase,No Medical Exam Required,', '', '2021-12-27 00:15:30', '2021-12-27 00:15:30', 40, 60),
        ('8bd6f61c-4aad-4f7f-88f5-968aefea4c90', '4c7749a6a3.jpg', 'microfast', 'info@microfast.com', 6, 'Coverage Never Decreases,No 2 Year Waiting Period,No Medical Exam Required,', '', '2021-12-27 00:18:07', '2021-12-27 00:18:07', 40, 80),
        ('95bd74e9-6546-4728-a1f5-8ede536e602a', '666e7de585.jpg', 'wings', 'wings@gmail.com', 19, 'Premiums Never Increase,No Medical Exam Required,', '', '2021-12-27 05:26:55', '2021-12-27 05:26:55', 20, 80),
        ('b8fd7608-5964-47b6-98af-c28301b1fd80', '491dbdc7fb.jfif', 'indy', 'info@indy.com', 8, 'Premiums Never Increase,No Medical Exam Required,', '', '2021-12-27 00:14:39', '2021-12-27 00:14:39', 60, 120),
        ('cceecbd8-6ba1-4f6b-9c90-c82a78a75fcf', '2423e99d01.png', 'Jubliee', 'contact@jubliee.com', 5, 'Policy Never Expires,Premiums Never Increase,Coverage Never Decreases,No 2 Year Waiting Period,', '', '2021-12-27 00:35:35', '2021-12-27 00:35:35', 20, 70);";

        DB::statement($query);
    }
}
