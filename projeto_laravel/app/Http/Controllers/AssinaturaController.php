<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    public function index()
    {
        $assinaturas = Assinatura::all();
        
        return view('assinaturas.assinaturas', compact('assinaturas'));
    }

    public function show($id)
    {
        $assinatura = Assinatura::find($id);
        
        return view('assinaturas.exibeassinatura', compact('assinatura'));
    }

    public function create()
    {
        return view('assinaturas.insereassinatura');
    }

    public function store(Request $request)
    {
        $assinatura = new Assinatura();
        $assinatura->qtd_caracteres = $request->qtd_caracteres;
        $assinatura->assinatura_padrao = $request->assinatura_padrao;
        $assinatura->assinatura_usada_x_vezes = $request->assinatura_usada_x_vezes;
        $assinatura->save();
        
        return redirect()->route('assinaturas.index')->with('success', 'Assinatura cadastrada com sucesso!');
    }
}
