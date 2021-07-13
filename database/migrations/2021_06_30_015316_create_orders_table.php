<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('order_no');
            $table->string('name')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->longText('address');
            $table->integer('price');
            $table->string('pay_type');
            $table->integer('is_paid')->default(0);
            $table->string('shipping')->comment('運送方式');
            $table->integer('shipping_fee')->comment('運費');
            $table->integer('shipping_status_id');
            $table->integer('order_status_id');
            $table->string('invoice')->comment('發票');

            $table->longText('remark')->nullable()->comment('備註欄');
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
        Schema::dropIfExists('orders');
    }
}
