<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalProceedingCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('legal_proceeding_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_proceeding_id')->unsigned();
            $table->integer('customer_id')->unsigned();

            $table->foreign('legal_proceeding_id')
                ->references('id')
                ->on('legal_proceeding');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customer');
        });
    }

    public function down()
    {
        Schema::dropIfExists('legal_proceeding_customers');
    }
}
