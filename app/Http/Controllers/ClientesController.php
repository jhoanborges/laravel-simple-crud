<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use Alert;
use Validator;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $clientes= Clientes::all();
        return view('layouts.home')->with([
            'clientes'=>$clientes,
        ]);
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

       $validator = Validator::make($request->all(), [
        'nombre' => 'required|unique:clientes|max:255',
        'email' => 'required|unique:clientes|max:255',
        'sexo' => 'required|integer|between:0,1',
        'ocupacion' => 'required|max:700',
    ]);

       if ($validator->fails()) {
      toast('Han ocurrido errores en la creación del cliente','info','top-right');

        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }


        Clientes::create([
            'nombre'=>$request->nombre,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'ocupacion'=>$request->ocupacion,
        ]);

      toast('Registro agregado con éxito','success','top-right');
      return redirect()->back();



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
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

            $cliente = Clientes::find($request->id);

     if ($cliente) {


       $validator = Validator::make($request->all(), [
'email' => 'required|max:255|unique:clientes,nombre,' . $request->id,
'email' => 'required|max:255|unique:clientes,email,' . $request->id,
        'sexo' => 'required|integer|between:0,1',
        'ocupacion' => 'required|max:700',
                'id' => 'required|integer',
    ]);

       if ($validator->fails()) {
      toast('Han ocurrido errores en la creación del cliente','info','top-right');

        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }


        $update = Clientes::where('id', $request->id)->update([
            'nombre'=>$request->nombre,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'ocupacion'=>$request->ocupacion,
        ]);



     if ($update) {
      toast('Registro actualizado con éxito','success','top-right');
      return redirect()->back();
  }else{
    toast('Error inesperado','error','top-right');
    return redirect()->back();
}




  }else{
    toast('Error inesperado o registro no existente','info','top-right');
    return redirect()->back();
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
     $cliente = Clientes::find($id);

     if ($cliente) {
      $cliente->delete();
      toast('Registro eliminado con éxito','success','top-right');
      return redirect()->back();
  }else{
    toast('Error inesperado o registro no existente','info','top-right');
    return redirect()->back();
}

}
}
