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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin')->default('Pria');
            $table->string('agama')->default('Islam');
            $table->text('alamat');

            $table->string('kelurahan_id')->references('kode')->on('kelurahans');
            $table->string('kecamatan_id')->references('kode')->on('kecamatans');
            $table->string('provinsi_id')->references('kode')->on('provinsis');
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
        Schema::dropIfExists('pegawais');
    }
};
