<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->string('endereco', 200);
            $table->string('cep', 8);
            $table->string('cidade', 200);
            $table->string('estado', 200);
            });
    }

    public function down()
    {
        Schema::dropIfExists('fornecedor');
    }
};
