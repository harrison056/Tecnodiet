<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Antropometria;

class AntropometriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('antropometria.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('antropometria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $antropometria = Antropometria::find($paciente->antropometria_id);
        return view('antropometria.edit', compact('paciente', 'id'), array('antropometria' => $antropometria));
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
        $paciente = Paciente::find($id);

        $antropometria = Antropometria::find($paciente->antropometria_id);

        $antropometria->altura = $request->get('altura');
        $antropometria->telefone = $request->get('peso');
        $antropometria->dtNascimento = $request->get('dtNascimento');
        $antropometria->bracoDirRelaxado = $request->get('bracoDirRelaxado');
        $antropometria->bracoEsqRelaxado = $request->get('bracoEsqRelaxado');
        $antropometria->bracoDirContraido = $request->get('bracoDirContraido');
        $antropometria->bracoEsqContraido = $request->get('bracoEsqContraido');
        $antropometria->antebracoDir = $request->get('antebracoDir');
        $antropometria->antebracoEsq = $request->get('antebracoEsq');
        $antropometria->punhoDir = $request->get('punhoDir');
        $antropometria->punhoEsq = $request->get('punhoEsq');
        $antropometria->pescoco = $request->get('pescoco');
        $antropometria->ombro = $request->get('ombro');
        $antropometria->peitoral = $request->get('peitoral');
        $antropometria->cintura = $request->get('cintura');
        $antropometria->abdomen = $request->get('abdomen');
        $antropometria->quadril = $request->get('quadril');
        $antropometria->panturrilhaDir = $request->get('panturrilhaDir');
        $antropometria->panturrilhaEsq = $request->get('panturrilhaEsq');
        $antropometria->coxaDir = $request->get('coxaDir');
        $antropometria->coxaEsq = $request->get('coxaEsq');

        if ($antropometria->save()) {
            return redirect('paciente/' .$id)->with('success', 'Alterações realizadas com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
