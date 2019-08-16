<?php

namespace App\Http\Controllers;

use App\Faixa;
use Illuminate\Http\Request;

class FaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if ($id == null) {
            return $this->list();
        } else {
            return $this->show($id);
        }
    }

    public function list() {
        return Faixa::orderBy('id','asc')->get();
    }

    public function showBy($id) {
        return Faixa::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Faixa;

        $obj->codigo_interno = $request->input('codigo_interno');
        $obj->cor = $request->input('cor');
        $obj->descricao = $request->input('descricao');

        $obj->save();

        return 'Faixa adicionada na base de dados com o id: ' . $obj->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faixa  $faixa
     * @return \Illuminate\Http\Response
     */
    public function show(Faixa $faixa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faixa  $faixa
     * @return \Illuminate\Http\Response
     */
    public function edit(Faixa $faixa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faixa  $faixa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faixa $faixa)
    {
        $faixa->codigo_interno = $request->input('codigo_interno');
        $faixa->cor = $request->input('cor');
        $faixa->descricao = $request->input('descricao');

        $faixa->save();

        return 'Faixa #' . $faixa->id . ' atualizada na base de dados com sucesso.';
    }

    public function updateBy(Request $request, $id)
    {
        $obj = Faixa::find($id);
        return $this->update($request,$obj);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faixa  $faixa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faixa $faixa)
    {
        $faixa->delete();
    }

    public function destroyBy($id)
    {
        $obj = Faixa::find($id);
        $this->destroy($obj);

        return 'Faixa #' . $id . ' excluída com sucesso.'; 
    }
}
