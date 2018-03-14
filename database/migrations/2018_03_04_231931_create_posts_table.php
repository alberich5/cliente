<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')
                ->references('id')->on('users')->onDetele('set null');
             $table->integer('id_entrada')->unsigned();
            $table->foreign('id_entrada')
                ->references('id')->on('entrada')->onDetele('set null');
            $table->integer('id_mes')->unsigned();
            $table->foreign('id_mes')
                ->references('id')->on('mes')->onDetele('set null');
            $table->integer('id_ambito')->unsigned();
            $table->foreign('id_ambito')
                ->references('id')->on('ambito')->onDetele('set null');
            $table->integer('id_delegacion')->unsigned();
            $table->foreign('id_delegacion')
                ->references('id')->on('delegacion')->onDetele('set null');
            $table->integer('id_codigo')->unsigned();
            $table->foreign('id_codigo')
                ->references('id')->on('codigo')->onDetele('set null');
            $table->integer('id_codigoqueja')->unsigned();
            $table->foreign('id_codigoqueja')
                ->references('id')->on('codigoqueja')->onDetele('set null');
             $table->integer('id_status')->unsigned();
            $table->foreign('id_status')
                ->references('id')->on('status')->onDetele('set null');
            $table->string('nombre_usuario');
            $table->date('fecha')->nullable();
            $table->string('tipo')->nullable();
            $table->string('entrada')->nullable();
            $table->string('empresa')->nullable();
            $table->string('representante')->nullable();
            $table->text('domicilio')->nullable();
            $table->text('contenido')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
