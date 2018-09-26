<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BrandSubCategoryAssoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_subCategory_assoc', function (Blueprint $table) {
            $table->integer('brand_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();

            $table->foreign('brand_id')->references('id')->on('brands')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('product_sub_categories')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['brand_id', 'sub_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
