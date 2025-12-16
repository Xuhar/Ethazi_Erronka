<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id('idSponsor');                 // idSponsor INT → clave primaria
            $table->string('Name', 100);             // Name VARCHAR(100)
            $table->integer('Price');                // Price INT (dinero que pagan)
            $table->timestamps();                    // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};