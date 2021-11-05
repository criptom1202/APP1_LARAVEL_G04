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
       
       $cargos =  Cargo::paginate(10);
       return view('cargos/index', compact('cargos'));
    }

    public function indexJson(){
        $cargos =  Cargo::paginate(10);
        return $cargos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo = new Cargo();
        return view('cargos.create', compact('cargo')); 
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

        $request->validate([
            'cargo' => 'required | max:50 | unique:cargos,cargo',
            'descripcion' => 'required | max:255'
        ]);
        


        date_default_timezone_set('America/Lima');
        $cargo = Cargo::create($request->all());
        return redirect()->route('cargo.index')->with('estado', 'Registro exitoso');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //eturn "Código: " .  $id;
        //$cargo = Cargo::where('id', $id)->get();
        // $cargo = Cargo::find($id);
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
    public function update(Request $request, Cargo $cargo)
    {
    //     $cargo = Cargo::find(5);
    //     $cargo->cargo = 'Administrador';
    //     $cargo->save();
        // Cargo::where('id', $id)
        // ->update(['cargo' => $request->cargo, 'descripcion' => $request->descripcion]);
        $request->validate([
            'cargo' => 'required | max:50 | unique:cargos,cargo,'.$cargo->id,
            'descripcion' => 'required | max:255,'.$cargo->id
        ]);
        $cargo->update($request->all());
        return redirect()->route('cargo.index')->with('estado', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        
        $cargo->delete();
        // $cargo = Cargo::find($id);
        // $cargo->delete();
        return redirect()->route('cargo.index')->with('estado', 'Eliminación correcta');
    }
}
