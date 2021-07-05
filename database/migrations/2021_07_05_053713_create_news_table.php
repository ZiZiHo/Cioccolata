<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->longText('media')->comment('媒體圖片或影片');
            $table->string('title')->comment('訊息標題');
            $table->longText('summary')->comment('訊息摘要');
            $table->integer('news_type_id')->comment('訊息種類，FK');
            $table->date('date')->comment('訊息日期');
            $table->longText('readmore')->comment('知道更多');
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
        Schema::dropIfExists('news');
    }
}
