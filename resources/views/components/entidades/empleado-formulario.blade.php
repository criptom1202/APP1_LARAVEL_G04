
@props(['caTitulo', 'caNombreRuta', 'caRegistro' => null, 'caAccion'])
<x-formulario :cTitulo="$caTitulo" :cNombreRuta="$caNombreRuta" :cRegistro="$caRegistro">

    <x-slot name="sInputs">
        {{ $slot ?? null }}
        <label for="">Nombres:<br>
            <input type="text" name="nombres" placeholder="Ingrese nombres" class="inputs w-1/2" value="{{ old('nombres',$caRegistro['empleados']->nombres) }}">
        </label><br>
        <label for="">Apellidos:<br>
            <input type="text" name="apellidos" placeholder="Ingrese apellidos" class="inputs w-1/2" value="{{ old('apellidos',$caRegistro['empleados']->apellidos) }}">
        </label><br>
        <label for="">Dni:<br>
            <input type="text" name="dni" placeholder="Ingrese dni" class="inputs w-1/4" value="{{ old('dni',$caRegistro['empleados']->dni) }}">
        </label><br>
        <label for="">Sexo:<br>
            <input type="radio" name="sexo" class="inputs" value="M">Masculino
            <input type="radio" name="sexo" class="inputs" value="F">Femenino
        </label><br>
        <select name="cargo_id" id="" class="inputs">
            @foreach($caRegistro['cargos'] as $cargo)
                <option value="{{ $cargo->id }}" class="inputs">{{ $cargo->cargo }}</option>
            @endforeach
        </select>
        <br>


        <label for="">Fecha inicio:<br>
            <input type="date" name="fecha_ini_cont" class="inputs w-1/4" value="">
        </label><br>
        <label for="">Fecha fin:<br>
            <input type="date" name="fecha_fin_cont" class="inputs w-1/4" value="">
        </label><br>
        <label for="">Salario:<br>
            <input type="text" name="salario" class="inputs w-1/4" value="">
        </label><br>

        <div>
            <a href="{{ route('cargo.index') }}" class="boton-gris">Atrás</a>
            <button class="boton-azul">{{ $caAccion }}</button>
        </div>
        
        <button id="btn_test" class="boton-azul">Test</button>
        
    </x-slot>

    <x-slot name="sModal">
        <x-modal cTitulo="Cargo">
        <table border="1">
                <thead>
                    <tr>
                        <th class="th-tabla rounded-tl-lg">#</th>
                        <th class="th-tabla">ID</th>
                        <th class="th-tabla">CARGO</th>
                        <th class="th-tabla">DESCRIPCION</th>
                      </tr>
                </thead>

                <tbody id="tabla_modal_cargo" class="tbody-tabla">
                
                       
                </tbody>
            </table>
        </x-modal>
    </x-slot>


</x-formulario>