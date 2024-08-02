<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->string('monthly_premium');
            $table->integer('face_amount')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('smoker_status', ['smoker', 'non-smoker'])->nullable();
            $table->foreignUuid('company_policy_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('policy_rates');
    }
}
