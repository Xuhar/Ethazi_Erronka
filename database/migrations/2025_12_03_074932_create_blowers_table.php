<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blowers', function (Blueprint $table) {
            $table->id('idBlower');
            $table->unsignedBigInteger('idTeam');
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->text('description')->nullable();
            $table->decimal('pulmonary_capacity', 8, 2);
            $table->integer('years_as_smoker')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blowers');
    }
};
