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
        Schema::create('kes_ibu_nifas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ibu_id')->constrained('ibus');
            $table->dateTime('tanggal_persalinan');
            $table->string('umur_kehamilan');
            $table->string('penolong_persalinan');
            $table->string('cara_persalinan');
            $table->string('keadaan_ibu');
            $table->string('keterangan_tambahan');
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
        Schema::dropIfExists('kes_ibu_nifas');
    }
};
