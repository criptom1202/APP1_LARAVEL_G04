<h1>LISTA DE CARGOS</h1>

<div>
    @if(session('estado'))
        <div>
            {{ session('estado') }}
        </div>
    @endif
</div>

<a href="{{ route('cargo.create') }}">Nuevo</a>








<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>CARGO</th>
            <th>DESCRIPCION</th>
            <th colspan = 3>MANTENIMIENTO</th>
        </tr>
    </thead>

    <tbody>
     
        @foreach($cargos as $cargo)
            <tr>
                <td>{{ $cargo->id }}</td>
                <td>{{ $cargo->cargo }}</td>
                <td>{{ $cargo->descripcion }}</td>
                <td><a href="{{ route('cargo.show', $cargo ) }}">Detalles</a></td>
                <td><a href="{{ route('cargo.edit', $cargo )}}">Modificar</a></td>
                <td>
                    <form action="{{ route('cargo.destroy', $cargo ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="eliminar">
                    </form>
                </td>
            </tr>
        @endforeach       
    </tbody>
</table>