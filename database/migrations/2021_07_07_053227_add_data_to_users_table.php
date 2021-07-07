<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('gender');
            $table->date('birthday');
            $table->string('contact');
            $table->string('address');
            $table->integer('shopping_cart_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('gender');
            $table->date('birthday');
            $table->string('contact');
            $table->string('address');
            $table->integer('shopping_cart_id');
        });
    }
}
