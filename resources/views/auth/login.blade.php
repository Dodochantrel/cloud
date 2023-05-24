<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <!-- js -->
    <script src="{{ asset('js/login.js') }}" defer></script>

</head>
<body>

    @include('layouts.navigation')

    <section id="center">

        <form method="POST" action="{{ route('login') }}" class="authentification" id='login'>
            @csrf

            <h2>Connexion</h2>

            @if ($errors->any())
                <div class="alert auth alert_error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif


            <!-- Email Address -->
            <div class="element_form">
                <label for="email">Email</label>
                <div class="input">
                    <div class="icon">
                        @include('icons.envelope')
                    </div>
                    <input id="email" type="email" name="email" required autofocus autocomplete="email" />
                </div>
            </div>

            <!-- Password -->
            <div class="element_form">
                <label for="password">Mot de passe</label>
                <div class="input" id="password_box">
                    <div class="icon">
                        @include('icons.lock')
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="new-password" />
                    <a onclick="showPassword('password')" id="eye" class="eye" href="#">
                        @include('icons.eye')
                    </a>
                </div>
                <p class="password_errors" id="password_error"></p>
            </div>

            <!-- Remember Me -->
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>Connexion automatique</span>
                </label>
            </div>

            <div class="element_form" id="links">
                <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                <button>Inscription</button>
            </div>
        </form>

    </section>
    
</body>
</html>
