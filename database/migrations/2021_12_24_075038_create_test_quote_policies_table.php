<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuotePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_quote_policies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('image')->nullable();
            $table->text('company_name');
            $table->text('company_email');
            $table->integer('basic_amount');
            $table->text('features');
            // es ma age kdr hai ***** ?
            $table->text('age');

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
        Schema::dropIfExists('test_quote_policies');
    }
}
