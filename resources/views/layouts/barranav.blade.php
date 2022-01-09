{{-- {{ $d_usuario = Auth::user()->id; }} --}}
@if (request()->routeIs('inicio.home') == false)
    <header>
        <nav class="nav justify-content-end bg-warning text-dark">
            <ul class="nav nav-tabs">
                {{-- <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('inicio.home') ? 'active' : ''}}" href="{{route('inicio.home')}}">LOGIN</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('u_prod.*') ? 'active' : ''}}" href="{{route('u_prod.index')}}">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('contacto') ? 'active' : ''}}" href="{{route('contacto')}}">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('inicio.logou') ? 'active' : ''}}" href="{{route('inicio.logout')}}">LOGOUT</a>
                </li>
            </ul>
        </nav>
    </header>
@endif