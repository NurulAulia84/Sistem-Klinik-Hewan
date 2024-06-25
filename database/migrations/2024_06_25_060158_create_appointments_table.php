<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan');
            $table->string('umur');
            $table->string('ras');
            $table->string('spesies');
            $table->string('keluhan');
            $table->string('dokter');
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
