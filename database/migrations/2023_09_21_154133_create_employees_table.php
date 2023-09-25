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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Kegiatan');
            $table->string('Uraian');
            $table->string('RKAP');
            $table->integer('Januari');
            $table->integer('Febuari');
            $table->integer('Maret');
            $table->integer('April');
            $table->integer('Mei');
            $table->integer('Juni');
            $table->integer('Juli');
            $table->integer('Agustus');
            $table->integer('September');
            $table->integer('Oktober');
            $table->integer('November');
            $table->integer('Desember');
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
        Schema::dropIfExists('employees');
    }
};