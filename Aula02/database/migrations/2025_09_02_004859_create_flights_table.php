<?php

// Schema = Tabela 
// Criando uma tabela chamada Flights 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) { // Está função vai funcionar como um Blueprint, está criando um projeto de tabela, criadno as plantas do projeto
            $table->id(); // Dentro da tabela terá um campo chamado id, ele geralmente é padrão e já vem no caos como primary key e auto encremento;
            $table->string('name'); // Recebe um campo chamado name do tipo string
            $table->string('airline'); // Recebe um campo chamado airline;
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('flights'); //Quando rodar aqui vai ser dropado 
    }
};
