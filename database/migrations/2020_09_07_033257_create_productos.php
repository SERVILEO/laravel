<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_Nombre',45);
            $table->string('p_Descripcion',200);
            $table->string('p_UrlImagen',100);
            $table->double('p_Precio', 8, 2);
            $table->integer('p_Stock');
            $table->string('p_unidades',50);
            $table->char('p_status',1);
            $table->unsignedBigInteger('id_Categoria');
            $table->foreign('id_Categoria')->references('id_Categoria')->on('categoria');
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
        Schema::dropIfExists('productos');
    }
}
