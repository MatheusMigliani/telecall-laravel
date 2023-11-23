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
        Schema::table('users', function (Blueprint $table) {
            $table->string('Permissao');
            $table->string('TelCelular');
            $table->string('TelFixo');
            $table->string('NomeCompleto');
            $table->string('NomeMaterno');
            $table->string('Cep');
            $table->string('Bairro');
            $table->string('Rua');
            $table->string('Numero');
            $table->string('Cidade');
            $table->string('Estado');
            $table->string('Genero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
