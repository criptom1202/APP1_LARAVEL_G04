<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>{{ $titulo ?? 'Inicio' }}</title>
</head>
<body class="bg-gray-100">
    
    <main>
        <div class="flex flex-row">
            <div class="bg-blue-900 pt-20 w-3/12"><x-menu class="text-white text-sm"/></div>
            <div class="w-10/12">
                <div class="contenedor font bold py-5 border-b-2 border-fuchsia-600">User</div>
                {{ $principal ?? null }}
                <div class="text-center text-sm"><p>Todos los derechos reservados &copy; 2021</p></div>
                
            </div>
        </div>
    </main>

</body>
</html>