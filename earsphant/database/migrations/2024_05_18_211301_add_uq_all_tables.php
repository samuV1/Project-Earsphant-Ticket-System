<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUqAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionando a Unique Key a colunna login, tabela user.
        Schema::table('users', function (Blueprint $table) {
            $table->unique('login');
        });

        //Adicionando a Unique Key a colunna code, tabela sector.
        Schema::table('sectors', function (Blueprint $table) {
            $table->unique('code');
        });

        //Adicionando a Unique Key a colunna code, tabela active.
        Schema::table('actives', function (Blueprint $table) {
            $table->unique('code');           
        });

        //Adicionando a Unique Key a colunna code, tabela queue.
        Schema::table('queues', function (Blueprint $table) {
            $table->unique('code');
        });
        
        //Adicionando a Unique Key a colunna code, tabela ticket.
        Schema::table('tickets', function (Blueprint $table) {
            $table->unique('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Removendo a Unique Key a colunna login, tabela user.
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_login_unique');
        });

        //Removendo a Unique Key a colunna code, tabela sector.
        Schema::table('sectors', function (Blueprint $table) {
            $table->dropUnique('sectors_code_unique');
        });

        //Removendo a Unique Key a colunna code, tabela active.
        Schema::table('actives', function (Blueprint $table) {
            $table->dropUnique('actives_code_unique');         
        });

        //Removendo a Unique Key a colunna code, tabela queue.
        Schema::table('queues', function (Blueprint $table) {
            $table->dropUnique('queues_code_unique');
        });
        
        //Removendo a Unique Key a colunna code, tabela ticket.
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropUnique('tickets_code_unique');
        });
    }
}
