<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLagacyRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagacy_riders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->double('legacy_rider_rate_whole')->nullable()->default(0);
            $table->double('legacy_rider_rate_term')->nullable()->default(0);
            $table->foreignUuid('company_id')->references('id')->on('insurance_companies')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lagacy_riders');
    }
}
