<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkLinkedToActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actives__tickets', function (Blueprint $table) {
            //Criando relacionamento entre a tabela actives e actives__tickets
            $table->foreign('active_code')->references('code')->on('actives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remover o relacionamento entre active e actives__tickets
        Schema::table('actives__tickets', function (Blueprint $table) {
            $table->dropForeign('actives__tickets_active_code_foreign');
        });
    }
}
