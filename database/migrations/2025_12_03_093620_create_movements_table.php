<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id('idMovement');                        // idMovement INT → PK
            $table->unsignedBigInteger('Wallet_idWallet');   // FK hacia wallets.idWallet
            $table->unsignedBigInteger('Wallet_idUser');     // FK hacia users.idUser (opcional, para búsquedas rápidas)
            $table->string('Type', 45);                      // Ej: "Depósito", "Apuesta", "Premio", "Retiro"
            $table->date('Date');                            // Fecha del movimiento
            $table->decimal('Amount', 12, 2);                // Cantidad (positiva o negativa)
            $table->timestamps();

            
            $table->index('Wallet_idWallet');
            $table->index('Date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};