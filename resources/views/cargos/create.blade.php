@if (session('estado'))
    <div>
        <h2>{{session('estado')}}</h2>
        <h3>123</h3>
    </div>
@endif


<H1>FORMULARIO DE NUEVO CARGO</H1>

<form action="{{ route('cargo.store') }} " method="POST">
    @csrf
    <input type="text" name="cargo" placeholder="Ingrese cargo"><br>
    <textarea name="descripcion" placeholder="Ingrese descripcion"></textarea><br>
    <input type="submit" value="REGISTRAR">
</form>