<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->id('idBet');                          // idBet INT → primary key
            $table->integer('idUser');                    // idUser INT
            $table->integer('idEvent');                   // idEvent INT
            $table->integer('idBlower');                  // idBlower INT
            $table->text('Type');                         // Type VARCHAR(45)
            $table->float('Quantity');                    // Quantity FLOAT
            $table->timestamps();                         // created_at + updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bets');
    }
};