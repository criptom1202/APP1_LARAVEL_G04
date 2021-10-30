<x-layout>

<x-slot name="principal">
    
<div class="contenedor">
            
            <div class="flex flex-row justify-between py-10">
                <h1 class="font-bold text-3xl">LISTA DE EMPLEADOS</h1>
                <a href="{{ route('empleados.create') }}" class="boton-azul">Nuevo</a>
            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th class="th-tabla rounded-tl-lg">ID</th>
                        <th class="th-tabla">NOMBRES</th>
                        <th class="th-tabla">APELLIDOS</th>
                        <th class="th-tabla">DNI</th>
                        <th class="th-tabla">SEXO</th>
                        <th class="th-tabla">CARGO</th>
                        <th class="th-tabla">FECHA INICIO</th>
                        <th class="th-tabla">FECHA FIN</th>
                        <th class="th-tabla">SALARIO</th>
                        <th class="th-tabla" colspan="2">MANTENIMIENTO</th>
                        <th class="th-tabla rounded-tr-lg"><a href="#" class="px-4 py-2 rounded border hover:bg-red-700"><i class="fas fa-trash-alt"></i></a></th>
                    </tr>
                </thead>

                <tbody class="tbody-tabla">
                
                    @foreach($empleados as $empleado)
                        <tr>
                            <td class="py-2">{{ $empleado->id }}</td>
                            <td class="py-2">{{ $empleado->nombres }}</td>
                            <td class="py-2">{{ $empleado->apellidos }}</td>
                            <td class="py-2">{{ $empleado->dni }}</td>
                            <td class="py-2 text-center">{{ $empleado->sexo}}</td>
                            <td class="py-2">{{ $empleado->cargo }}</td>
                            <td class="py-2">{{ $empleado->fecha_ini_cont }}</td>
                            <td class="py-2">{{ $empleado->fecha_fin_cont }}</td>
                            <td class="py-2">{{ $empleado->salario }}</td>

                            <td class="py-2"><a href="{{ route('empleados.show', $empleado->id ) }}" class="text-yellow-500 px-4 py-2 hover:text-yellow-800"><i class="fas fa-info-circle"></i></a></td>
                            <td class="py-2"><a href="{{ route('empleados.edit', $empleado->id )}}" class="rounded bg-red-700 text-white px-4 py-2 font-bold hover:bg-red-900 "><i class="fas fa-edit"></i></a></td>
                            <td class="py-2 text-center">
                                <form action="{{ route('empleados.destroy', $empleado->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="eliminar">
                                </form>
                                <!-- <input type="checkbox"> -->
                            </td>
                        </tr>
                    @endforeach       
                </tbody>
            </table>
  
        </div>

</x-slot>

</x-layout>