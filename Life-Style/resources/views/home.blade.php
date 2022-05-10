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

            <h2 class="content">Contenu de la semaine ! :</h2>

            <section class="slide">
            <div class="grille1" >
                <div class="grid-item1">
                    <a href="{{ '/lifestylerap' }}" method={{ 'GET' }} >
                    <img src="../image/image1.png">
                    </a>
                </div>
                <div class="grid-item1">
                    <a href="{{ '/lifestylerap' }}" method={{ 'GET' }} >
                    <img src="../image/image2.jpeg">
                    </a>
                </div>
                <div class="grid-item1">
                    <a href="{{ '/lifestylerap' }}" method={{ 'GET' }} >
                    <img src="../image/nikelaylow.jpeg">
                    </a>
                </div>
            </div>
            </section>

            <h2 class="content">Des articles à découvrir ! :</h2>

            <section class="style">
            <div class="grille2">
                <div class="grid-item5">
                    <a href="{{ '/lifestylerap' }}" method={{ 'GET' }} >
                    <img src="../image/shoot2.jpg">
                    </a>
                </div>
                <div class="grid-contenair1">
                    <div class="grid-item6">
                        <a href="{{ '/lifestylerap' }}" method={{ 'GET' }} >
                        <img src="../image/shoot1" >
                        </a>
                    </div>
                    <div class="grid-item6">
                        <a href="{{ '/lifestylerap' }}" method={{ 'GET' }} >
                        <img src="../image/laylow3.jpg">
                        </a>
                    </div>
                </div>
            </div>
            </section>

            <h2 class="content">Photographie ! :</h2>
          
            <section class="style2">
            <div class="grille3">
                <div class="grid-item8">
                    <img src="../image/aj1.jpg">
                </div>
                <div class="grid-item8">
                    <img src="../image/adidasxnike.jpg">
                </div>
            </div>
            </section>

            <h2 class="content">Achetez les paires de vos rêves ! :</h2>

            <section class="sneakers">
            <div class="grille4">
                <div class="grid-item10">
                    <a href="{{ '/sneakers/1' }}" method={{ 'GET' }} >
                    <img src="../image/aj1RoyalBlue.jpg">
                    </a>
                </div>
                <div class="grid-item10">
                    <a href="{{ '/sneakers/2' }}" method={{ 'GET' }} >
                <img src="../image/wabisabi.jpg">
                    </a>
                </div>
                <div class="grid-item10">
                    <a href="{{ '/sneakers/3' }}" method={{ 'GET' }} >
                    <img src="../image/aj4offwhite.jpg">
                    </a>

                </div>
            </div>
             </section>
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
    <script type="text/javascript" src="../js/carousel.js"></script> 
</body>

</html>
