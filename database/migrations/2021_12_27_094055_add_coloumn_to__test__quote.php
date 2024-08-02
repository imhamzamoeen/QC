<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumnToTestQuote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_quote_policies', function (Blueprint $table) {
            //
            $table->bigInteger('lower_age')->default(0);
            $table->bigInteger('upper_age')->default(120);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_test__quote', function (Blueprint $table) {
            //
        });
    }
}
