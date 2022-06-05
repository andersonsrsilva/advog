<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtectionValidationsTable extends Migration
{
    public function up()
    {
        Schema::create('protection_validations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamp('ttl');
            $table->longText('validation_result');

            $table->foreign('user_id','pv_foreign_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unique('user_id', 'unique_user');
            $table->index('ttl');
        });
    }

    public function down()
    {
        Schema::table('protection_validations', function (Blueprint $table) {
            $table->dropForeign('pv_foreign_user');
        });

        Schema::dropIfExists('protection_validations');
    }
}
