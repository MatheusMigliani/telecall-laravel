<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin'),
        'Permissao' => 'admin',
        // ... (outras colunas necessárias)
    ]);
}

public function down()
{
    // Remova o usuário administrador se for necessário desfazer a migração

}
};
