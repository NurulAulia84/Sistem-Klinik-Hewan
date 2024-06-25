<?php
// database/migrations/{timestamp}_create_hewans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewansTable extends Migration
{
    public function up()
    {
        Schema::create('hewans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan');
            $table->string('spesies');
            $table->string('ras');
            $table->integer('umur');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hewans');
    }
}
