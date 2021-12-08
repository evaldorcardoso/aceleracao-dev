<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    function show($id){
        $documento = Documento::find($id);

        return view('exibedoc', compact('documento'));
    }
}
