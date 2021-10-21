<x-layout>
    <x-slot name="principal">
        <div class="contenedor bg-gray-100 h-screen">
            <h1 class="titulo-form">{{ $cTitulo }}</h1>

            <form action="{{ route($cNombreRuta, $cRegistro ?? null )}}" method="POST">
                @csrf
                {{ $sInputs }}
            </form>
        </div>

    </x-slot>
</x-layout>