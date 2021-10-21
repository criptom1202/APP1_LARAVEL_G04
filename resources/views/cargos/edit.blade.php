<x-entidades.cargo-formulario caTitulo="Editar Cargo" caNombreRuta="cargo.update" :caRegistro="$cargo" caAccion="Actualizar">

    @method('PUT')
    <input type="text" name="id_car"><br>
</x-entidades.cargo-formulario>