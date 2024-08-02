<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_formulas', function (Blueprint $table) {
            $table->id();
            $table->string('step_details')->nullable();
            $table->string('operator_1')->nullable();
            $table->string('operation')->nullable();
            $table->string('operator_2')->nullable();
            $table->foreignUuid('company_policy_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('policy_formulas');
    }
}
