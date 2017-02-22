<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consume_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('consumer_id');
            $table->integer('number');
            $table->integer('unit_price');
            $table->integer('total_price');
            $table->integer('pay');
            $table->integer('status');
            $table->timestamp('consume_time');
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
        Schema::dropIfExists('consume_records');
    }
}
