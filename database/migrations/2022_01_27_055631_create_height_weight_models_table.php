<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeightWeightModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('height_weight_models', function (Blueprint $table) {
            $table->id();
            $table->string('min_height')->nullable()->default(0);
            $table->string('max_height')->nullable()->default(0);
            $table->integer('min_weight')->nullable()->default(0);
            $table->integer('max_weight')->nullable()->default(0);
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
        Schema::dropIfExists('height_weight_models');
    }
}
