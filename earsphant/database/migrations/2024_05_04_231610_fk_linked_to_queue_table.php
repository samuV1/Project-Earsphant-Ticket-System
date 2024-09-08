<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkLinkedToQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            //Criando relacionamento entre a tabela queue e tickets
            $table->foreign('queue_code')->references('code')->on('queues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remover o relacionamento entre queues e tickets
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('tickets_queue_code_foreign');
         });
    }
}
