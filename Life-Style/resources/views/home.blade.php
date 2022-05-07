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

            <section class="slide">
            <div class="grille1">
                <div class="grid-item1">
                    <img src="../image/image1.png">
                </div>
                <div class="grid-item1">
                    <img src="../image/image2.jpeg">
                </div>
                <div class="grid-item1">
                    <img src="../image/nikelaylow.jpeg">
                </div>
            </div>
            </section>

            <section class="style">
            <div class="grille2">
                <div class="grid-item5">
                    <img src="../image/shoot2.jpg">
                </div>
                <div class="grid-contenair1">
                    <div class="grid-item6">
                        <img src="../image/shoot1" >
                    </div>
                    <div class="grid-item6">
                        <img src="../image/laylow3.jpg">
                    </div>
                </div>
            </div>
            </section>

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

            <section class="sneakers">
            <div class="grille4">
                <div class="grid-item10">
                    <img src="../image/aj1RoyalBlue.jpg">
                </div>
                <div class="grid-item10">
                <img src="../image/wabisabi.jpg">
                </div>
                <div class="grid-item10">
                    <img src="../image/aj4offwhite.jpg">

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
</body>

</html>
