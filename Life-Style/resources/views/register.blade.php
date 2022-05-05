<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/register.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @extends('layout.header')
    @section('content')
        <div class="contenairglobal">
            <div class="imageleft">
                <img src="../image/shooting 1.png.jpeg" class="imageleft">
            </div>
            <div class="contenairregister">
                <h1>Resell Academy</h1>
                <h2>Bienvenue !</h2>
                <div class="form">
                    <form method="{{ 'POST' }}" action="{{ '/register' }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="lastname" placeholder='Nom' class="name" id='name' required><br>
                        <input type="text" name="name" placeholder='Prénom' class="lastname" id='lasttname'
                            required><br>
                        <input type="text" name="email" placeholder='Email' class="lastname" id='email' required><br>
                        <input type="text" name="pseudo" placeholder='Pseudo' class="username" id='username'
                            required><br>
                        <input type="password" name="password" placeholder='Mot de passe' class='password' required><br>
                        <input type="password" name="password" placeholder='Confirmez mot de passe' class='confirmpassword'
                            required><br>
                        <p>Your password must be longer than 7 characters.</p>
                        <button class="signup" type="submit" value="register">Sign Up</button>
                    </form>

                </div>
            </div>
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
