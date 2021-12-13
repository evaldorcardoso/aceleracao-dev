<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAssinatura;
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

    public function store(StoreUpdateAssinatura $request)
    {
        $assinatura = Assinatura::create($request->all());
        if($assinatura)
        {
            return redirect()->route('assinaturas.index')->with('success', 'Assinatura cadastrada com sucesso!');
        }
        
        return redirect()->back()->with('error', 'Erro ao cadastrar assinatura!');
    }
}
