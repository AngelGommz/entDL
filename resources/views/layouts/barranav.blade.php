<header>
    <nav class="nav justify-content-end bg-warning text-dark">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('inicio.home') ? 'active' : ''}}" href="{{route('inicio.home')}}">LOGIN</a>
                {{-- @dump(request()->routeIs('inicio.home')) --}}
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('u_prod.*') ? 'active' : ''}}" href="{{route('u_prod.index')}}">PRODUCTOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('contacto') ? 'active' : ''}}" href="{{route('contacto')}}">CONTACTO</a>
            </li>
        </ul>
    </nav>
</header>