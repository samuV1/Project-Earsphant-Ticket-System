<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação da tabela Atendimentos (tickets)
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code');
            $table->string('user_login'); // Será FK
            $table->string('sector_code'); // Será FK
            $table->string('queue_code'); // Será FK
            $table->string('service');
            $table->string('subject')->nullable();
            $table->string('description');
            $table->dateTime('open', 0);
            $table->dateTime('closed', 0)->nullable();
            $table->dateTime('sla', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
