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
        Schema::create('informasi_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPelanggan');
            $table->foreignId('idBooking');
            $table->string('Name');
            $table->string('Phone_number');
            $table->string('alamat');
            $table->integer('Price')->default(20000);
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
        Schema::dropIfExists('informasi_pemesanans');
    }
};
