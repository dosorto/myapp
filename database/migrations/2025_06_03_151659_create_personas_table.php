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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("primer_nombre");
            $table->string("segundo_nombre")->nullable();
            $table->string("primer_apellido");
            $table->string("segundo_apellido")->nullable();
            $table->string("dni");
            $table->string("telefono");
            $table->text("direccion");
            $table->enum("sexo",["M","F"]);
            $table->date("fecha_nacimiento");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
