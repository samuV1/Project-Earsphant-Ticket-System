<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação da tabela Ativos (actives)
        Schema::create('actives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string(('code'));
            $table->string(('sector_code'));// Será FK
            $table->string('type');
            $table->string('category');
            $table->string('brand');
            $table->string('model');
            $table->string('license');
            $table->date('aquisition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actives');
    }
}

