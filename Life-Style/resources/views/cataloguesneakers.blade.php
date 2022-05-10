<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/cataloguesneakers.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @extends('layout.header-connect')
    @section('content')

    <section class="title">
        <h1>Chaussures & Baskets</h1>

        <select id="choose" onchange="selectService(this)" class="select" name="marque">
            <option selected disabled>Choisir un service
            <option value="tous">Tous
            <option value="nike">Nike
            <option value="adidas">Adidas
            <option value="puma">Puma
        </select>
    </section>



        <div class="grille">
            @foreach ($sneakers as $sneakers)
            <div class="contenair" data-service="{{ $sneakers['marque'] }}">
                <div class="grid-item">
                  <img src="{{ asset('storage/avatars/' . $sneakers->image) }}">
                </div>

              <p>{{ $sneakers['nom'] }}</p>
              <p>{{ $sneakers['prix'] }}</p>
              <a href="/sneakers/{{ $sneakers['id'] }}">
              <button class="butn" type="submit" value="butn">Voir</button>
              </a>
            </div>

             @endforeach
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
<script type="text/javascript" src="../js/filter.js"></script> 
</body>
</html>
