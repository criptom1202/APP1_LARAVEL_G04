
@props(['caTitulo', 'caNombreRuta', 'caRegistro' => null, 'caAccion'])
<x-formulario :cTitulo="$caTitulo" :cNombreRuta="$caNombreRuta" :cRegistro="$caRegistro">

    <x-slot name="sInputs">
        {{ $slot ?? null }}
        <label for="">Cargo:<br>
            <input type="text" name="cargo" placeholder="Ingrese cargo" class="inputs w-1/4" value="{{ old('cargo',$caRegistro->cargo) }}">
        </label><br>
        <label for="">Descripción:<br>
            <textarea name="descripcion" placeholder="Ingrese descripción" class="inputs w-1/2 h-40">{{ old('descripcion', $caRegistro->descripcion) }}</textarea>
        </label><br>
        <div>
            <a href="{{ route('cargo.index') }}" class="boton-gris">Atrás</a>
            <button class="boton-azul">{{ $caAccion }}</button>
        </div>
        
        
    </x-slot>


</x-formulario>