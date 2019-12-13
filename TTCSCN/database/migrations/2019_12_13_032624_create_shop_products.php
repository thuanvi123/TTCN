<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_name');
            $table->integer('pro_category_id');
            $table->integer('pro_price');
            $table->tinyInteger('pro_sale');
            $table->string('pro_view');
            $table->string('pro_description');
            $table->string('pro_avatar');
            $table->string('pro_description_seo');
            $table->integer('homepage')->default(0);
            $table->integer('pro_stock');
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
        Schema::dropIfExists('shop_products');
    }
}
