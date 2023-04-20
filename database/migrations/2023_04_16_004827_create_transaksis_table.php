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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('kode_transaksi', 10)->primary();
            $table->string('plat_motor', 10);
            $table->foreign('plat_motor')->references('plat_motor')->on('motors');
            $table->string('no_paspor', 10);
            $table->foreign('no_paspor')->references('no_paspor')->on('penyewas');
            $table->string('id_pegawai', 10);
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('total');
            $table->string('km_awal', 10);
            $table->string('km_akhir', 10);
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
};
