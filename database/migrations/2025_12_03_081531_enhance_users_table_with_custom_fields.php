<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // 1. Cambiamos el nombre de la PK de "id" → "idUser"
            $table->renameColumn('id', 'idUser');

            // 2. Añadimos Username (único) y Wallet
            $table->string('Username')->unique()->after('name');
            $table->decimal('Wallet', 12, 2)->default(100.00)->after('email'); // 100 de regalo al registrarse

            // 3. (Opcional) Si quieres quitar el campo "name" que ya no usas:
            $table->dropColumn('name');
        });

        // Cambiamos la clave primaria para que use idUser
        Schema::table('users', function (Blueprint $table) {
            $table->primary('idUser');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('idUser', 'id');
            $table->string('name')->after('id');
            $table->dropColumn('Username');
            $table->dropColumn('Wallet');
            $table->dropPrimary('idUser');
            $table->primary('id');
        });
    }
};