<x-entidades.cargo-formulario caTitulo="Editar Cargo" caNombreRuta="cargo.update" :caRegistro="$cargo" caAccion="Actualizar">




    @method('PUT')
    <label for="">ID:<br>
        <input type="text" name="id" class="inputs w-1/8" value="{{ $cargo->id }}" disabled><br>
    </label>
</x-entidades.cargo-formulario>