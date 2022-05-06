<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/home.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @extends('layout.header-connect')
    @section('content')
        <div class="contenairglobal">


            <div class="grille1">
                <div class="grid-item1"></div>
                <div class="grid-item2"></div>
                <div class="grid-item3"></div>
            </div>


            <div class="grille2">
                <div class="grid-item5"></div>
                <div class="grid-contenair1">
                    <div class="grid-item6"></div>
                    <div class="grid-item7"></div>
                </div>
            </div>

            <div class="grille3">
                <div class="grid-item8"></div>
                <div class="grid-item9"></div>
            </div>

            <div class="grille4">
                <div class="grid-item10"></div>
                <div class="grid-item11"></div>
                <div class="grid-item12"></div>
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
