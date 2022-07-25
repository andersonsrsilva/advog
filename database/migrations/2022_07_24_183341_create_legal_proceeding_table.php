<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalProceedingTable extends Migration
{
    public function up()
    {
        Schema::create('legal_proceeding', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lawsuit_id')->unsigned();
            $table->integer('lawsuit_type_id')->unsigned();
            $table->string('legal_address_1',);
            $table->string('legal_address_2',);
            $table->integer('uf_id')->unsigned();
            $table->text('lawsuit_description');
            $table->text('defendant_description');
            $table->text('preliminary_description');
            $table->text('fact_description');
            $table->text('right_description');
            $table->text('order_description');
            $table->decimal('value', 9, 2);
            $table->text('number_lawsuit');
            $table->text('local_lawsuit');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('lawsuit_id')
                ->references('id')
                ->on('lawsuit');

            $table->foreign('lawsuit_type_id')
                ->references('id')
                ->on('lawsuit_type');

            $table->foreign('uf_id')
                ->references('id')
                ->on('uf');
        });
    }

    public function down()
    {
        Schema::dropIfExists('legal_proceeding');
    }

}
