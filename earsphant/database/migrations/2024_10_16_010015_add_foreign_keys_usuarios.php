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
        Schema::table('atendimentos', function (Blueprint $table) {
            $table->foreign('usuario')  
                  ->references('login')->on('usuarios')  
                  ->onDelete('restrict');  
        });

        Schema::table('notas', function (Blueprint $table) {
            $table->foreign('usuario')  
                  ->references('login')->on('usuarios')  
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('atendimentos', function (Blueprint $table) {
            // Remove a chave estrangeira ao desfazer a migration
            $table->dropForeign(['usuario']);
        });

        Schema::table('notas', function (Blueprint $table) {
            // Remove a chave estrangeira ao desfazer a migration
            $table->dropForeign(['usuario']);
        });
    }
};
