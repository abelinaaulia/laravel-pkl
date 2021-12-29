<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan__peminjamen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_peminjamann')->unsigned();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_peminjamann')->references('id')->on('peminjamen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan__peminjamen');
    }
}
