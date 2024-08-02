<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_formulas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('result_variable');
            $table->string('Operator');
            $table->string('operand2');
            $table->string('operand1');
            $table->string('type');
            $table->enum('policy_type', ['whole', 'term']);
            $table->integer('step_number');
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
        Schema::dropIfExists('company_formulas');
    }
}
