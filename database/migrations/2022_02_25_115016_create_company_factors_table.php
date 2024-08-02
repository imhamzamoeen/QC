<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_factors', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->boolean('whole_factor_check')->nullable()->default(false);
            $table->boolean('term_factor_check')->nullable()->default(false);
            $table->double('annual_mode_factor_whole')->nullable()->default(0);
            $table->double('policy_fee_annual_whole')->nullable()->default(0);
            $table->double('semi_annual_mode_factor_whole')->nullable()->default(0);
            $table->double('policy_fee_semi_annual_whole')->nullable()->default(0);
            $table->double('quarterly_mode_factor_whole')->nullable()->default(0);
            $table->double('policy_fee_quarterly_whole')->nullable()->default(0);
            $table->double('monthly_mode_factor_whole')->nullable()->default(0);
            $table->double('policy_fee_monthly_whole')->nullable()->default(0);
            $table->double('annual_mode_factor_term')->nullable()->default(0);
            $table->double('policy_fee_annual_term')->nullable()->default(0);
            $table->double('semi_annual_mode_factor_term')->nullable()->default(0);
            $table->double('policy_fee_semi_annual_term')->nullable()->default(0);
            $table->double('quarterly_mode_factor_term')->nullable()->default(0);
            $table->double('policy_fee_quarterly_term')->nullable()->default(0);
            $table->double('monthly_mode_factor_term')->nullable()->default(0);
            $table->double('policy_fee_monthly_term')->nullable()->default(0);
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
        Schema::dropIfExists('company_factors');
    }
}
