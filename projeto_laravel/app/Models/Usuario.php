<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    static function index(){
        $dados = array(
            'nome' => 'Evaldo',
            'idade' => 28
        );
        return $dados;
    }
}
