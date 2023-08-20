<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = ['cpf', 'nome', 'data_nascimento'];
    // Regras de validação
    public static $rules = [
        'cpf' => 'required|integer|unique:usuarios,cpf',
        'nome' => 'required|string',
        'data_nascimento' => 'required|date',
    ];
}
