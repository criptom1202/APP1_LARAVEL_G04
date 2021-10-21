<x-layout>

<x-slot name="principal">
    
<div class="contenedor">
            
            <div class="flex flex-row justify-between py-10">
                <h1 class="font-bold text-3xl">LISTA DE CARGOS</h1>
                <a href="{{ route('cargo.create') }}" class="boton-azul">Nuevo</a>
            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th class="th-tabla rounded-tl-lg">ID</th>
                        <th class="th-tabla">CARGO</th>
                        <th class="th-tabla">DESCRIPCION</th>
                        <th class="th-tabla" colspan = 2>MANTENIMIENTO</th>
                        <th class="th-tabla rounded-tr-lg"><a href="#" class="px-4 py-2 rounded border hover:bg-red-700"><i class="fas fa-trash-alt"></i></a></th>
                    </tr>
                </thead>

                <tbody class="tbody-tabla">
                
                    @foreach($cargos as $cargo)
                        <tr>
                            <td class="py-2">{{ $cargo->id }}</td>
                            <td class="py-2">{{ $cargo->cargo }}</td>
                            <td class="py-2">{{ $cargo->descripcion }}</td>
                            <td class="py-2"><a href="{{ route('cargo.show', $cargo ) }}" class="text-yellow-500 px-4 py-2 hover:text-yellow-800"><i class="fas fa-info-circle"></i></a></td>
                            <td class="py-2"><a href="{{ route('cargo.edit', $cargo )}}" class="rounded bg-red-700 text-white px-4 py-2 font-bold hover:bg-red-900 "><i class="fas fa-edit"></i></a></td>
                            <td class="py-2 text-center">
                                <!-- <form action="{{ route('cargo.destroy', $cargo ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="eliminar">
                                </form> -->
                                <input type="checkbox">
                            </td>
                        </tr>
                    @endforeach       
                </tbody>
            </table>
            {{ $cargos->links() }}
        </div>

</x-slot>

</x-layout>