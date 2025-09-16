<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;

    protected $table = 'cliente';//Noma da Tabela 

    public $fillable = ['id','primeiroNome','sobrenome'];

    public $timestamps = false;
}

#responsavel pela comunicação com o banco de dados 