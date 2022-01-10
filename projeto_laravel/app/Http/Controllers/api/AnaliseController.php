<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analises = Analise::all();
        return response()->json($analises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $analise = Analise::create($request->all());
        if($analise){
            return response()->json($analise, 201);
        }
        return response()->json(['error' => 'Erro ao cadastrar analise!'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analise = Analise::find($id);
        if($analise){
            return response()->json($analise);
        }
        return response()->json(['error' => 'Analise não encontrada!'], 404);
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
        $analise = Analise::find($id);
        if($analise){
            $analise->update($request->all());
            return response()->json($analise);
        }
        return response()->json(['error' => 'Analise não encontrada!'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analise = Analise::find($id);
        if($analise){
            $analise->delete();
            return response()->json(['success' => 'Analise removida com sucesso!'], 200);
        }
        return response()->json(['error' => 'Analise não encontrada!'], 404);
    }
}
