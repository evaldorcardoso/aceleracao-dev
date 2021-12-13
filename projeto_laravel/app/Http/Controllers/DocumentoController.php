<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDocumento;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    function show($id){
        $documento = Documento::find($id);

        return view('documentos.exibedoc', compact('documento'));
    }

    function create(){
        return view('documentos.inseredoc');
    }

    function store(StoreUpdateDocumento $request){
        $documento = Documento::create($request->all());
        if($documento){
            return redirect()->route('perfil')->with('success', 'Documento cadastrado com sucesso!');
        }
        return redirect()->back()->with('error', 'Erro ao cadastrar documento!');
    }
}
