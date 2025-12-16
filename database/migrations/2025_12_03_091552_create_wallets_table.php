<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id('idWallet');                    // idWallet INT → PK
            $table->unsignedBigInteger('idUser');     // Relación con users.idUser
            $table->decimal('Money', 14, 2)->default(0.00); // Saldo con 2 decimales
            $table->timestamps();

            // Clave única: un usuario solo puede tener UNA wallet
            $table->unique('idUser');

            // Índice para búsquedas rápidas
            $table->index('idUser');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};