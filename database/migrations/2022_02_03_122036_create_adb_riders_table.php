<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdbRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adb_riders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('lower_limit')->nullable()->default(0);
            $table->integer('upper_limit')->nullable()->default(0);
            $table->double('annual_rate')->nullable()->default(0);
            $table->text('type')->nullable();
            $table->foreignUuid('company_id')->references('id')->on('insurance_companies')->onDelete('cascade');
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
        Schema::dropIfExists('adb_riders');
    }
}
