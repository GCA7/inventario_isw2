<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('compras', function (Blueprint $table) {
          $table->increments('idcompra');
          $table->string('nombreproducto')->unique();;
          $table->integer('cantidad');
          $table->integer('precio');
          $table->string('nombreusuario');
          $table->rememberToken();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}
