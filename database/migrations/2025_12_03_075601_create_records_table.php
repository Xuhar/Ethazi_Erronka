<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id('idRecord');                    // Record INT → primary key
            $table->integer('idEvent');              // idEvent INT
            $table->integer('idBlower');             // idBlower INT
            $table->integer('Ranking');              // Ranking INT
            $table->time('Time');                    // Time TIME (e.g. 00:02:15)
            $table->float('Top_blow');               // Top_blow FLOAT
            $table->timestamps();                    // created_at + updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};