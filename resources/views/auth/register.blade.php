<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <!-- js -->
    <script src="{{ asset('js/register.js') }}" defer></script>

</head>
<body>

    @include('layouts.navigation')

    <section id="center">

        <form method="POST" action="{{ route('register') }}" class="authentification" id='register'>
            @csrf

            <h2>Inscription</h2>

            <!-- First Name -->
            <div class="element_form">
                <label for="first_name">Prénom</label>
                <div class="input">
                    <div class="icon">
                        @include('icons.user')
                    </div>
                    <input id="first_name" type="first_name" name="first_name" required autocomplete="first_name" />
                </div>
            </div>

            <!-- Last Name -->
            <div class="element_form">
                <label for="last_name">Nom</label>
                <div class="input">
                    <div class="icon">
                        @include('icons.user')
                    </div>
                    <input id="last_name" type="last_name" name="last_name" required autocomplete="family-name" />
                </div>
            </div>

            <!-- Email Address -->
            <div class="element_form">
                <label for="email">Email</label>
                <div class="input">
                    <div class="icon">
                        @include('icons.envelope')
                    </div>
                    <input id="email" type="email" name="email" required autocomplete="email" />
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

            <!-- Confirm Password -->
            <div class="element_form">
                <label for="password_confirmation">Confirmer mot de passe</label>
                <div class="input" id="confirm_password_box">
                    <div class="icon">
                        @include('icons.lock')
                    </div>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <a onclick="showPassword('password_confirmation')" id="eye" class="eye" href="#">
                        @include('icons.eye')
                    </a>
                </div> 
                <p class="password_errors" id="confirm_password_error"></p>
            </div>

            <div class="element_form" id="links">
                <a href="{{ route('login') }}">Déjà inscrit ?</a>
                <button>Inscription</button>
            </div>

        </form>

    </section>
</body>
</html>