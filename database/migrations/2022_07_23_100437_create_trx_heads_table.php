<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_heads', function (Blueprint $table) {
            $table->id();
            $table->integer('id_outlet');
            $table->integer('trx_no');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->decimal('total_tag');
            $table->decimal('tax');
            $table->decimal('serve');
            $table->decimal('grandtotal');
            $table->string('paytype');
            $table->decimal('pay');
            $table->decimal('change');
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
        Schema::dropIfExists('trx_heads');
    }
}
