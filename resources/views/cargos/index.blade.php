<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div>
    @if(session('estado'))
        <div>
            {{ session('estado') }}
        </div>
    @endif
</div>

    <main>

        <div class="container w-10/12 mx-auto">
            
            <div class="flex flex-row justify-between py-10">
                <h1 class="font-bold text-3xl">LISTA DE CARGOS</h1>
                <a href="{{ route('cargo.create') }}" class="py-2 px-5 rounded-full bg-blue-900 text-white hover:bg-red-800">Nuevo</a>
            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th class="px-4 py-3 bg-blue-900 text-white rounded-tl-lg">ID</th>
                        <th class="px-4 py-3 bg-blue-900 text-white">CARGO</th>
                        <th class="px-4 py-3 bg-blue-900 text-white">DESCRIPCION</th>
                        <th class="px-4 py-3 bg-blue-900 text-white rounded-tr-lg" colspan = 3>MANTENIMIENTO</th>
                    </tr>
                </thead>

                <tbody class="divide-y-2 divide-gray-200 divide-solid text-sm">
                
                    @foreach($cargos as $cargo)
                        <tr>
                            <td class="py-2">{{ $cargo->id }}</td>
                            <td class="py-2">{{ $cargo->cargo }}</td>
                            <td class="py-2">{{ $cargo->descripcion }}</td>
                            <td class="py-2"><a href="{{ route('cargo.show', $cargo ) }}" class="text-yellow-500 px-4 py-2 hover:text-yellow-800"><i class="fas fa-info-circle"></i></a></td>
                            <td class="py-2"><a href="{{ route('cargo.edit', $cargo )}}" class="rounded bg-red-700 text-white px-4 py-2 font-bold ">Modificar</a></td>
                            <td class="py-2">
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
            {{ $cargos->links() }}
        </div>
       
    </main>
</body>

</html>



