<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkLinkedToSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //Criando relacionamento entre a tabela sectors e users
            $table->foreign('sector_code')->references('code')->on('sectors');
        });

        Schema::table('tickets', function (Blueprint $table) {
            //Criando relacionamento entre a tabela sectors e tickets
            $table->foreign('sector_code')->references('code')->on('sectors');
        });

        Schema::table('actives', function (Blueprint $table) {
            //Criando relacionamento entre a tabela sectors e actives
            $table->foreign('sector_code')->references('code')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //Remover o relacionamento entre sectors e users
        Schema::table('users', function (Blueprint $table) {
           $table->dropForeign('users_sector_code_foreign');
        });

        //Remover o relacionamento entre sectors e tickets
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('tickets_sector_code_foreign');
         });

        //Remover o relacionamento entre sectors e actives
        Schema::table('actives', function (Blueprint $table) {
            $table->dropForeign('actives_sector_code_foreign');
         });
    }
}
