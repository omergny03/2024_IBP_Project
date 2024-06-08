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
        Schema::create('kitaplar', function (Blueprint $table) {
            $table->id();
            $table->string('kitap_ismi')->unique();;
            $table->integer('sayfa_sayisi');
            $table->string('kitap_turu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitaplar');
    }
};