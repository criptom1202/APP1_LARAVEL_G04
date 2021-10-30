<x-layout>
    <x-slot name="principal">
        <div class="contenedor bg-gray-100 h-screen">
            <h1 class="titulo-form">{{ $cTitulo }}</h1>

           
                @if ($errors->any())
                    <div class="bg-red-200 w-full py-10 px-10">
                        <ul>
                            @foreach( $errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
          
        
            <form action="{{ route($cNombreRuta, $cRegistro ?? null )}}" method="POST">
                @csrf
                {{ $sInputs }}
            </form>
        </div>

    </x-slot>
</x-layout>