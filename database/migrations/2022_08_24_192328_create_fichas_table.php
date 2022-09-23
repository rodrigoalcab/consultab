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
            $table->foreign('campo_id')->after('id')->constrained('campos')->cascadeOnDelete();
            $table->foreign('faixa_id')->after('id')->constrained('faixas')->cascadeOnDelete();
            $table->foreign('codigo_id')->after('id')->constrained('codigos')->cascadeOnDelete();
            $table->foreign('objetivo_id')->after('id')->constrained('objetivos')->cascadeOnDelete();
            $table->foreign('abordagem_id')->after('id')->constrained('abordagens')->cascadeOnDelete();
            $table->foreign('sugestao_id')->after('id')->constrained('sugestoes')->cascadeOnDelete();
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
