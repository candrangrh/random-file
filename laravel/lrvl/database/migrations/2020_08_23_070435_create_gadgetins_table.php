<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGadgetinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadgetins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', '100')->unique();
            $table->string('jenis', '20');
            $table->double('harga', '10');
            $table->string('gambar', '200');
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
        Schema::dropIfExists('gadgetins');
    }
}
