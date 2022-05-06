<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/login.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @extends('layout.header')
    @section('content')
        <div class="contenairlogin">
            <h1>Resell Academy</h1>
            <h2>Bienvenue !</h2>
            <div class="form">
                <form method="{{ 'POST' }}" action="{{ route('login-user') }}">
                    @csrf
                    <input type="text" placeholder='Pseudo' class="username" id='username' required name="pseudo"><br>
                    <input type="password" placeholder='••••••••••' class='password' name="password"><br><br>
                    <button class="logg" type="submit" value="login">Login</button>
                    <a href="{{ '/reset' }}" class='forgot'>Forgot?</a>
                </form>
            </div>
            <div class="register">
                <p class="createaccount">Devenez membre! <a href={{ '/register' }}>Créer un compte</a></p>
            </div>
        </div>

        <footer>
            <div class="globalcontenairbis">

                <a class="contact">Contact</a>
                <div class="logo">
                    <a href=""><img src="../image/facebook.png"></a>
                    <a href=""><img src="../image/twitter.png"></a>
                    <a href=""><img src="../image/instagram.png"></a>
                    <a href=""><img src="../image/youtube.png"></a>
                </div>

            </div>
        </footer>
    @endsection
</body>

</html>
