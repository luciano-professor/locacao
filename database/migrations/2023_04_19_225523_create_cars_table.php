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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            //Criando os outros campos
            $table->string('placa', 8);
            $table->string('modelo', 50);
            $table->string('marca', 50);
            $table->year('ano');
            $table->text('descricao')->nullable();
            $table->string('cor', 20);
            $table->string('chassi', 17);
            $table->decimal('diaria');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
