<nav class="navbar">
    <div class="container">
        <a href="{{route('homepage')}}" class="logo">{{$title}}</a>
        <ul class="nav-menu">
            <li><i class="bi bi-house"></i><a href="{{route('homepage')}}"> Home</a></li>
            <li><i class="bi bi-book"></i><a href="{{route('servizi')}}"> Servizi</a></li>
            <li><i class="bi bi-people"></i><a href="{{route('team')}}"> Team</a></li>
            <li><i class="bi bi-envelope"></i><a href="{{route('contatti')}}"> Contatti</a></li>
        </ul>
    </div>
</nav>