<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/sneakers.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @extends('layout.header-connect')
    @section('content')

    <div class="contenairlogin">
@if (Auth::check())
    @if (Auth::user()->role == 'admin')
        <div class="contenair">
            <img src="{{ asset('storage/avatars/' . $sneakers->image) }}">
            <p>{{ $sneakers['nom'] }}</p>
            <p>{{ $sneakers['prix'] }}</p>
            <select name="pointure" id="pointure" class="select">
                <option value="">--Choisir une pointure--</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
            </select>
            <button class="butn" type="submit" value="butn">Ajoutez au panier</button>
            <td>
                <form action="/sneakers/{{ $sneakers->id }}" method="post">
                    @csrf
                    <button class="delete" type="submit"
                        onclick=" return confirm('Confirmer la suppression ?');">Supprimer la vente ?</button>
                </form>
            </td>
        </div>

    @else

    <div class="contenair">
        <img src="{{ asset('storage/avatars/' . $sneakers->image) }}">
        <p>{{ $sneakers['nom'] }}</p>
        <p>{{ $sneakers['prix'] }}</p>
        <select name="pointure" id="pointure" class="select">
            <option value="">--Choisir une pointure--</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
        </select>
        <button class="butn" type="submit" value="butn">Ajoutez au panier</button>
    </div>
    @endif
@else

    <div class="contenair">
        <img src="{{ asset('storage/avatars/' . $sneakers->image) }}">
        <p>{{ $sneakers['nom'] }}</p>
        <p>{{ $sneakers['prix'] }}</p>
        <select name="pointure" id="pointure" class="select">
            <option value="">--Choisir une pointure--</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
        </select>
        <button class="butn" type="submit" value="butn">Ajoutez au panier</button>
    </div>

@endif
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
<script type="text/javascript" src="../js/delete.js"></script> 
</body>

</html>
