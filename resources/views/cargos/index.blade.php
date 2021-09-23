<h1>LISTA DE CARGOS</h1>


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
                <td><a href="{{ route('cargo.show', $cargo->id ) }}">Detalles</a></td>
                <td><a href="{{ route('cargo.edit', $cargo )}}">Modificar</a></td>
                <td><a href="#">Eliminar</a></td>
            </tr>
        @endforeach       
    </tbody>
</table>