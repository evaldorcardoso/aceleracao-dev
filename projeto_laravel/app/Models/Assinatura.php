<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    use HasFactory;

    protected $fillable = [
        'qtd_caracteres',
        'assinatura_padrao',
        'assinatura_usada_x_vezes'
    ];
    protected $connection = 'pgsql';
}
