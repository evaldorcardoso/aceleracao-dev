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
}
