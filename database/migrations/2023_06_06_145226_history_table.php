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
        Schema::create('historyKhatam', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('ayat_awal');
            $table->string('ayat_akhir');
            $table->string('juz_awal');
            $table->string('juz_akhir');
            $table->string('surah_awal');
            $table->string('surah_akhir');
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
        Schema::dropIfExists('historyKhatam');
    }
};
