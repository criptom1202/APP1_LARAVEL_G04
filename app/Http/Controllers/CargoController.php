<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //validacion
       
       $cargos =  Cargo::all();
       return view('cargos/index', compact('cargos'));
       //return redirect()->route('cargo.create')->with('estado', 'Registro exitoso');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request;

        // $cargo = new Cargo;
        // $cargo->cargo = $request->cargo;
        // $cargo->descripcion = $request->descripcion;
        // $cargo->save();

        // $cargo = Cargo::create([
        //     'cargo' =>  $request->cargo,
        //     'descripcion' => $request->descripcion
        // ]);

        date_default_timezone_set('America/Lima');



        $cargo = Cargo::create($request->all());



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //eturn "Código: " .  $id;
        //$cargo = Cargo::where('id', $id)->get();
        $cargo = Cargo::find($id);
        return $cargo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos/edit', compact('cargo'));
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
