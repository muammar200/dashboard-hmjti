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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->enum('name', [
                'Organisasi & Kaderisasi',
                'Keilmuan',
                'Minat & Bakat',
                'Ekonomi Kreatif',
                'Humas & Advokasi',
                'Komunikasi & Informasi',
                'Non Divisi',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
