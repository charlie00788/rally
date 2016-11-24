<div class="dropdown profile-element">
    <span>
        @if(!Auth::user()->admin)

        <img alt="image" class="img-circle mi_logo" src="{{ asset('imagenes/user.jpg') }}" />

        @else

        <img alt="image" class="img-circle mi_logo" src="{{ asset('imagenes/admin.jpg') }}" />

        @endif
    </span>

    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="clear">
            <span class="block m-t-xs">
                <strong class="font-bold">
                        {{ Auth::user()->nickname }}
                </strong>
            </span>

            <span class="text-muted text-xs block">
                Administrador
                <b class="caret"></b>
            </span>
        </span>
    </a>

    <ul class="dropdown-menu animated fadeInRight m-t-xs">
        <li>
            <a href="{{ route('logout') }}">Cerrar sesión</a>
        </li>
    </ul>
</div>