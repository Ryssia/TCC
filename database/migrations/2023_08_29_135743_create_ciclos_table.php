<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiclosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos', function (Blueprint $table) {
            $table->id();
            $table->date('inicio');
            $table->date('final')->nullable();
            $table->unsignedBigInteger('fluxo')->nullable();
            $table->unsignedBigInteger('colica')->nullable();
            $table->unsignedBigInteger('dor_cabeca')->nullable();
            $table->unsignedBigInteger('dor_seios')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('ciclos');
    }
}
