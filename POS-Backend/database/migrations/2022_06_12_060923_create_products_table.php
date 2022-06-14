<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            // $table->timestamps();
            $table->engine = 'InnoDB';
           
            // $table->unique('productCode');
            $table->increments('id');
            $table->string('productCode')->unique();
            $table->string('productName')->nullable();
            $table->string('productDescription')->nullable();
            $table->string('manufacturerId')->nullable();
            $table->string('landedCost')->nullable();
            $table->string('markUp')->nullable();
            $table->string('discount')->nullable();
            $table->string('retailCost')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
};
