<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_companies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->string('func_name')->nullable()->default('importGeneralFile');
            $table->string('existance_name')->nullable();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('description');
            $table->bigInteger('primary_contact');
            $table->bigInteger('secondary_contact')->nullable();
            $table->string('company_image')->nullable()->default('Companies_Default.png');
            $table->foreignUuid('owner_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('insurance_companies');
    }
}
