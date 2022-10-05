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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            
            //relação
            $table->bigInteger('campo_id')->unsigned();
            $table->foreign('campo_id')->references('id')->on('campos')->onDelete('cascade');

            $table->bigInteger('faixa_id')->unsigned();
            $table->foreign('faixa_id')->references('id')->on('faixas')->onDelete('cascade');

            $table->string('codigo');
            $table->text('objetivos');            
            $table->text('abordagem')->nullable()->default();
            $table->text('sugestoes')->nullable()->default();
            $table->string('recurso')->nullable()->default();
            $table->string('link_recurso')->nullable()->default();
            $table->string('propaganda')->nullable()->default();       
            $table->string('link_propaganda')->nullable()->default();       
            
            
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
        Schema::dropIfExists('fichas');
    }
};
