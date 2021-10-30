<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <nav>
        <ul>
            <li class="menu"><div class="px-5"><i class="fas fa-home"></i></div><a href="#">Inicio</a></li>
            <li class="menu"><div class="px-5"><i class="fas fa-users-cog"></i></div><a href="{{ route('cargo.index') }}">Cargos</a></li>
            <li class="menu"><div class="px-5"><i class="fas fa-users"></i></div><a  href="#">Empleados</a></li>
            <li class="menu"><div class="px-5"><i class="fas fa-project-diagram"></i></div><a href="#">Proyectos</a></li>
        </ul>
    </nav>
</div>