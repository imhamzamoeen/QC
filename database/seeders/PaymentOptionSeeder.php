<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = array(
            array('name' => 'ACH', 'type' => 'Crypto Payments'),
            array('name' => 'Credit Cards ( VISA , MasterCard)', 'type' => 'Card Payments'),
            array('name' => 'Credit Cards ( VISA only)', 'type' => 'Card Payments'),
            array('name' => 'Credit Cards ( MasterCard only)', 'type' => 'Card Payments'),
            array('name' => 'Direct Express', 'type' => 'Cash or Deliver'),
        );
        DB::table('payment_options')->insert($options);
    }
}
