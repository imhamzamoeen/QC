<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermCateogryDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_cateogry_data', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->double('tobacco_annual_rate')->nullable();
            $table->double('non_tobacco_annual_rate')->nullable();
            $table->foreignId('policy_cateogries_id')->constrained();
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
        Schema::dropIfExists('term_cateogry_data');
    }
}
