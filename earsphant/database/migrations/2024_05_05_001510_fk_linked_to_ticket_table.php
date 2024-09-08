<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkLinkedToTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('technicians', function (Blueprint $table) {
            //Criando relacionamento entre a tabela tickets e technicians
            $table->foreign('ticket_code')->references('code')->on('tickets');
        });

        Schema::table('actives__tickets', function (Blueprint $table) {
            //Criando relacionamento entre a tabela tickets e actives__tickets
            $table->foreign('ticket_code')->references('code')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remover o relacionamento entre tickets e technicians
        Schema::table('technicians', function (Blueprint $table) {
            $table->dropForeign('technicians_ticket_code_foreign');
        });
 
        //Remover o relacionamento entre tickets e actives__tickets
        Schema::table('actives__tickets', function (Blueprint $table) {
             $table->dropForeign('actives__tickets_ticket_code_foreign');
        });
    }
}
