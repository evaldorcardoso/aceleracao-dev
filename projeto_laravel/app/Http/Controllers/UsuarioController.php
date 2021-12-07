<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Documento;

class UsuarioController extends Controller
{
    function index(){
        $usuarios = Usuario::index();
        $documentos = Documento::all();

        return view('usuario.perfil', compact('usuarios', 'documentos'));
    }
}
