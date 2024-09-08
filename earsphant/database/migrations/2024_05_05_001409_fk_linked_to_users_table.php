<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkLinkedToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('technicians', function (Blueprint $table) {
            //Criando relacionamento entre a tabela users e technicians
            $table->foreign('user_login')->references('login')->on('users');
        });

        Schema::table('tickets', function (Blueprint $table) {
            //Criando relacionamento entre a tabela users e tickets
            $table->foreign('user_login')->references('login')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remover o relacionamento entre users e technicians
        Schema::table('technicians', function (Blueprint $table) {
           $table->dropForeign('technicians_user_login_foreign');
        });

        //Remover o relacionamento entre users e tickets
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('tickets_user_login_foreign');
        });
    }
}
