<H1>FORMULARIO DE EDICIÓN DE CARGO</H1>

<form action="{{ route('cargo.update', $cargo  ) }} " method="POST">
    @csrf
    @method('PUT')
    <input type="text" value="{{ $cargo->id }}" readonly><br>
    <input type="text" name="cargo"  value="{{ $cargo->cargo }}" placeholder="Ingrese cargo"><br>
    <textarea name="descripcion" placeholder="Ingrese descripcion">{{ $cargo->descripcion }}</textarea><br>
    <input type="submit" value="ACTUALIZAR">
</form>