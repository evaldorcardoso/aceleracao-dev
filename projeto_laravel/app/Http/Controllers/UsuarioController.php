<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Documento;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    function index(){
        $usuarios = Usuario::index();
        $documentos = Documento::all();
        Log::channel('documentos')->info('Usuários e Documentos consultados com sucesso!');

        return view('usuarios.perfil', compact('usuarios', 'documentos'));
    }
}
