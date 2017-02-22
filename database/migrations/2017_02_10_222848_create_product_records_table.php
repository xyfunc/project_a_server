<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('producter_id');
            $table->integer('number');
            $table->integer('unit_price');
            $table->integer('total_price');
            $table->integer('pay');
            $table->integer('status');
            $table->timestamp('product_time');
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
        Schema::dropIfExists('product_records');
    }
}
