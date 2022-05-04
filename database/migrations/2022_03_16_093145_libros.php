<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("libros",function(Blueprint $table){

            $table->engine="InnoDB";
            $table->bigIncrements("id");
            $table->bigInteger("categoria_id")->unsigned(); //Creacion clave foranea
            $table->string("nombre");
            $table->timestamps();
            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade"); //Relacionar clave foranea
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
