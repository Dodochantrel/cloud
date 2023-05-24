<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/navigation.css') }}">

<section id="navigation">

    <nav>
        @if(Auth::check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        @else
            <a href="{{ route('login') }}">Connexion</a>
            <a href="{{ route('register') }}">Inscription</a>
        @endif
    </nav>

</section>