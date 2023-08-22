<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alunos;
use Illuminate\Support\Facades\Validator;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dadosAlunos = Alunos::all();
        $contador = $dadosAlunos->count();

        return 'Alunos Contados' . $contador .' - ' .$dadosAlunos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosAlunos = $request->all();
        $validador = Validator::make($dadosAlunos,[
            'Nome' => 'required',
            'dtNasc' => 'required',
            'CPF' => 'required',
            'sexo' => 'required',
            'NomeResponsavel' => 'required'
        ]);

        if($validador->fails()){
            return 'Registros invalidos!'.$validador->errors(true). 500;
        }

        $registrosAlunos = Alunos::create($dadosAlunos);

        if($registrosAlunos){
            return 'Alunos cadastrados com sucesso' . $registrosAlunos . 201
        
            ;
        }else{
            return 'Erro ao cadastrar as Alunoss' . 500;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
