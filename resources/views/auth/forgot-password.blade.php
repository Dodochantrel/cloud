<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mot de passe oublié</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

</head>
<body>

    @include('layouts.navigation')

    <section id="center">

        <form method="POST" action="{{ route('password.email') }}" class="authentification" id='forgot_password'>
            @csrf

            <p id="text_password_forgot">Vous avez oublié votre mot de passe ? Pas de problème. Indiquez-nous votre adresse électronique et nous vous enverrons un lien de réinitialisation du mot de passe qui vous permettra d'en choisir un nouveau.</p>

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

            <div class="element_form" id="links">
                <a href="{{ route('register') }}">Vous n'êtes pas inscrit ?</a>
                <button>Envoyer</button>
            </div>

        </form>

    </section>
    
</body>
</html>