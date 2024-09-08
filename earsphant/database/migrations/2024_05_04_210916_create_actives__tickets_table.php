<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivesTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação da tabela Ativos_Atendimentos / Relação Muitos para Muitos
        Schema::create('actives__tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('active_code');// Será FK
            $table->string('ticket_code');// Será FK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actives__tickets');
    }
}