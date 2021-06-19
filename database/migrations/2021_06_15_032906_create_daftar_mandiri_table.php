<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarMandiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_mandiri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pasien', 100);
            $table->string('nama_dokter', 100);
            $table->string('nama_poli', 100);
            $table->date('tanggal_lahir');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_mandiri');
    }
}
