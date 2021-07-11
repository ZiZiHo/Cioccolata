<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('產品名稱');
            $table->integer('product_type_id')->comment('產品類別id');
            $table->integer('price')->comment('產品價格');
            $table->string('unit')->comment('產品內容物單位(1片，1塊)');
            $table->string('photo')->comment('產品照片');
            $table->string('ingredient')->comment('產品成分');
            $table->string('weight')->comment('產品重量');
            $table->string('EXP')->comment('保存期限');
            $table->string('temp')->comment('保存溫度');
            $table->longText('remark')->comment('備註')->nullable();
            $table->integer('sort')->comment('推薦序');
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
        Schema::dropIfExists('products');
    }
}
