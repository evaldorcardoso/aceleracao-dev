<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\{Analise, Assinatura, Documento};
use Illuminate\Http\Request;

class RelatorioDeAnaliseController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt-auth');
    }

    public function index()
    {
        $documentos = Documento::all();
        $assinaturas = Assinatura::all();
        $analises = Analise::all();
        return response()->json([
            'documentos' => $documentos,
            'assinaturas' => $assinaturas,
            'analises' => $analises
        ], 200);
    }
}
