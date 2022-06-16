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
        Schema::create('sales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        
        $table->increments('id');
        $table->string('salesId')->unique();
        $table->string('productCode')->nullable();
        $table->string('batchNumber')->nullable();
        $table->string('manufacturerId')->nullable();
        $table->string('paymentMode')->nullable();
        $table->string('quantity')->nullable();
        $table->string('status')->nullable();
        $table->string('landedCost')->nullable();
        $table->string('markUp')->nullable();
        $table->string('discount')->nullable();
        $table->string('retailCost')->nullable();
        $table->string('soldBy')->nullable();
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
        //
    }
};
