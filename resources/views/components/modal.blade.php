<div id="modal" class="modal bg-red-200 w-full">
    <div class="contenedor">
        <div class="header">{{ $cTitulo }}</div>
        <div class="contenido">
            {{ $slot }}
        </div>
        <div class="footer">
            <button id="btn_agregar" class="boton-azul">Agregar</button>
            <button id="btn_cancelar" class="boton-gris">Cancelar</button>
        </div>
    </div>
</div>