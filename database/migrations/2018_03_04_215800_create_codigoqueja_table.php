<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigoquejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('codigoqueja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_codigo')->unsigned();
            $table->foreign('id_codigo')
                ->references('id')->on('codigo')->onDetele('set null');
            $table->string('nombre_queja');
            
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
        Schema::dropIfExists('codigoqueja');
    }
}
