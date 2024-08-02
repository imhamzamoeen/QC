<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_riders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('type')->nullable();
            $table->text('RiderFor')->nullable();
            $table->double('whole_term_life')->nullable()->default(0);
            $table->double('pay20')->nullable()->default(0);
            $table->integer('max_child_rider')->nullable()->default(100);
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
        Schema::dropIfExists('child_riders');
    }
}
