<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    function index(){
        $usuarios = Usuario::index();

        return view('usuario.perfil', compact('usuarios'));
    }
}
