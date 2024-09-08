<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação da tabela Técnico / Relação Muitos para Muitos / Adição da coluna nota, para notas de atendimento
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_login');// Será FK
            $table->string('ticket_code');// Será FK
            $table->string('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technicians');
    }
}
