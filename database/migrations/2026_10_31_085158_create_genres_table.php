<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Gawin ang genres table lang
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        // (Tandaan: Kung ang 'genre_id' ay nailagay mo na sa create__comic__table, 
        // huwag na itong idagdag dito para maiwasan ang duplicate column error.)
    }

    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};