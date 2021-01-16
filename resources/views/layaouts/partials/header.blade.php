<header>
    <h1>Cooders Free</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{(request()->routeIs('home')) ? 'active' : ''}}">home</a></li>
            <li><a href="{{route('cursos.index')}}" class="{{(request()->routeIs('cursos.*')) ? 'active' : ''}}">cursos</a></li>
            <li><a href="{{route('nosotros')}}" class="{{(request()->routeIs('nosotros')) ? 'active' : ''}}">nosotros</a></li>
            <li><a href="{{route('contacto.index')}}" class="{{(request()->routeIs('contacto.*')) ? 'active' : ''}}">Contacto</a></li>
        </ul>
    </nav>
    <hr>
    <hr>
</header>