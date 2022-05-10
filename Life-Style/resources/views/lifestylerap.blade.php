<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/lifestylerap.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
@extends('layout.header-connect')
@section('content')

<section class="title">
    <h1>Life Style & Rap : Poste </h1>
<select id="choose" onchange="selectService(this)" class="select" name="type">
    <option selected disabled>Choisir un service
    <option value="tous">Tous
    <option value="lifestyle">Life Style
    <option value="rap">Rap
</select>

</section>
    <section class="global">

        <div class="contenair" >
            @foreach ($post as $post)
            <div class="article" data-service="{{ $post['type'] }}"> 
                <h1>{{ $post['nom'] }}</h1>
                
                <div class="item">
                    <img src="{{ asset('storage/avatars/' . $post->image) }}">
                <div class="content">
                    <p>{{ $post['content'] }}
                    </p>
                </div>
            </div>
            <p>{{ $post['date'] }}</p>
        </div>
        @endforeach
    </section>

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
<script type="text/javascript" src="../js/filtertype.js"></script> 
</html>
