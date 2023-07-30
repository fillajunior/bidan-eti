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
        Schema::create('kes_ibu_hamil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ibu_id')->constrained('ibus');
            $table->date('tanggal');
            $table->string('keluhan_sekarang');
            $table->string('tekanan_darah');
            $table->integer('berat_badan');
            $table->integer('umur_kehamilan');
            $table->string('letak_janin');
            $table->string('denyut_jantung');
            $table->string('kaki_bengkak');
            $table->string('tindakan');
            $table->string('tambahan');
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
        Schema::dropIfExists('kes_ibu_hamil');
    }
};
