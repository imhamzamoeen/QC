<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComapniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comapnies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('name');
            $table->text('email');
            $table->text('features',1000);
            $table->string('image')->default('Company_Default.png');
            $table->double('semi_annual_factor');
            $table->double('monthly_annual_factor');
            $table->double('policy_fee_term');
            $table->double('annual_fee');
            $table->double('semi_annual_fee');
            $table->double('monthly_fee');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comapnies');
    }
}
