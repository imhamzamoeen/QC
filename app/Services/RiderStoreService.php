<?php

namespace App\Services;

use App\Models\adb_riders;
use App\Models\child_riders;

class RiderStoreService
{
    public function __construct()
    {
        //
    }

    public static function sotre_adb(array $data)
    {

        if (array_key_exists('whole_rider_checkbox', $data)) {

            if (!empty($data['adb_rider_div_whole'])) {

                foreach ($data['adb_rider_div_whole'] as $eachadbrider) {
                    adb_riders::updateOrCreate([
                        'type' => 'whole',
                        'company_id' => $data['company_id'],
                    ], [
                        'lower_limit' => $eachadbrider['lower_age_whole'],
                        'upper_limit' => $eachadbrider['upper_age_whole'],
                        'annual_rate' => $eachadbrider['annual_rate_whole'],
                        'type' => 'whole',
                        'company_id' => $data['company_id'],
                    ]);
                }
            }
        }

        if (array_key_exists('term_rider_checkbox', $data)) {
            if (!empty($data['adb_rider_div_term'])) {
                foreach ($data['adb_rider_div_term'] as $eachadbrider) {
                    adb_riders::create([
                        'type' => 'term',
                        'company_id' => $data['company_id'],
                    ], [
                        'lower_limit' => $eachadbrider['lower_age_term'],
                        'upper_limit' => $eachadbrider['upper_age_term'],
                        'annual_rate' => $eachadbrider['annual_rate_term'],
                        'type' => 'term',
                        'company_id' => $data['company_id'],
                    ]);
                }
            }
        }
        return;
    }

    public static function sotre_child(array $data)
    {

        if (array_key_exists('whole_rider_checkbox', $data)) {
            if (!empty($data['child_rider_repeater_whole'])) {
                foreach ($data['child_rider_repeater_whole'] as $eachadbrider) {
                    child_riders::updateOrCreate([
                        'RiderFor' => $eachadbrider['type_whole'],
                        'company_id' => $data['company_id'],
                        'type' => 'term',
                    ], [

                        'whole_term_life' => $eachadbrider['whole_term_rate_whole'],
                        'pay20' => $eachadbrider['20pay_rate_whole'],
                        'type' => 'whole',
                        'company_id' => $data['company_id'],
                        'RiderFor' => $eachadbrider['type_whole'],
                    ]);
                }
            }
        }

        if (array_key_exists('term_rider_checkbox', $data)) {
            if (!empty($data['child_rider_repeater_term'])) {
                foreach ($data['child_rider_repeater_term'] as $eachadbrider) {

                    child_riders::updateOrCreate([
                        'RiderFor' => $eachadbrider['type_term'],
                        'company_id' => $data['company_id'],
                        'type' => 'term',
                    ], [
                        'whole_term_life' => $eachadbrider['whole_term_rate_term'],
                        'pay20' => $eachadbrider['20pay_rate_term'],
                        'type' => 'term',
                        'company_id' => $data['company_id'],
                        'RiderFor' => $eachadbrider['type_term'],
                    ]);
                }
            }
        }
        return;
    }
}
