<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtectionShopTokensTable extends Migration
{
    public function up()
    {
        Schema::create('protection_shop_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('number');
            $table->timestamp('expires');
            $table->string('success_url');
            $table->string('cancel_url');
            $table->string('success_url_title');
            $table->string('cancel_url_title');
            $table->string('shop_url');

            $table->foreign('user_id', 'pst_foreign_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->index('number');
            $table->index('expires');
            $table->unique(['user_id'], 'pst_unique_user');
        });
    }

    public function down()
    {
        Schema::table('protection_shop_tokens', function (Blueprint $table) {
            $table->dropForeign('pst_foreign_user');
        });

        Schema::dropIfExists('protection_shop_tokens');
    }
}
