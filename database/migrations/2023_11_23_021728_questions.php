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
            $table->string('question_1')->nullable();
            $table->string('answer_1')->nullable();
            $table->string('question_2')->nullable();
            $table->string('answer_2')->nullable();
            $table->string('question_3')->nullable();
            $table->string('answer_3')->nullable();
            $table->text('Genero');
            $table->text('cpf')->unique();
            $table->dropColumn('cpf')->unique();
            $table->dropColumn('Genero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf')->unique();
            $table->string('Genero');
        });
    }
};
