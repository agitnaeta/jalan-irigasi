<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('irigasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_daerah');
            $table->bigInteger('luas_area');
            $table->bigInteger('panjang');
            $table->bigInteger('lebar');
            $table->string('desa');
            $table->longText('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irigasis');
    }
};
