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
        Schema::create('stock', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('stockCode');
            
            $table->string('productCode');
            $table->foreign('productCode')->references('productCode')->on('products')->onDelete('cascade');
            $table->string('batchNumber')->nullable();
            $table->string('invoiceNumber')->nullable();
            $table->string('manufacturerId')->nullable();
            $table->string('quantityReceived')->nullable();
            $table->string('quantitySold')->nullable();
            $table->string('receivedBy')->nullable();
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
