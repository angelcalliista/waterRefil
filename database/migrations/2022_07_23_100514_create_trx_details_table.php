<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_outlet');
            $table->integer('trx_no');
            $table->integer('id_product');
            $table->string('jenis product');
            $table->string('nama_product');
            $table->integer('qty');
            $table->string('size_product');
            $table->decimal('total_tag');
            $table->string('desc');
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
        Schema::dropIfExists('trx_details');
    }
}
