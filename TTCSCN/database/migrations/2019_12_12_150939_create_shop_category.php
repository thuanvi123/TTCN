<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('c_slug');
            $table->char('c_icon');
            $table->string('c_avatar');
            $table->tinyInteger('c_active')->default(1)->index();
            $table->string('c_title_seo');
            $table->string('c_description_seo');
            $table->integer('homepage')->default(0);
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
        Schema::dropIfExists('shop_category');
    }
}
