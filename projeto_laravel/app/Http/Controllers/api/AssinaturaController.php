<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assinaturas = Assinatura::all();
        return response()->json($assinaturas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assinatura = Assinatura::create($request->all());
        if($assinatura){
            return response()->json($assinatura, 201);
        }
        return response()->json(['error' => 'Erro ao cadastrar assinatura!'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assinatura = Assinatura::find($id);
        if($assinatura){
            return response()->json($assinatura);
        }
        return response()->json(['error' => 'Assinatura não encontrada!'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $assinatura = Assinatura::find($id);
        if($assinatura){
            $assinatura->update($request->all());
            return response()->json($assinatura);
        }
        return response()->json(['error' => 'Assinatura não encontrada!'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assinatura = Assinatura::find($id);
        if($assinatura){
            $assinatura->delete();
            return response()->json(['success' => 'Assinatura excluída com sucesso!']);
        }
        return response()->json(['error' => 'Assinatura não encontrada!'], 404);
    }
}
