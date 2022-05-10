<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/ajout.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
</head>

<body>
@extends('layout.header-connect')
    @section('content')

    <section class="title">
    <p>Créez votre poste ! <p>
    </section>

    <div class="contenairlogin">
        
           
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            <form action="{{ route('lifestylerap-user') }}" method="{{ 'POST' }}" enctype="multipart/form-data">
                @csrf
                <p>Veuillez insérer les informations de votre poste</p>
                <div class="content">

                    <label for="nom">
                        <p>Nom:</p>
                    </label>
                    <input type="text" id="nom" name="nom" placeholder="Nom du poste">
                    
                    <label for="content">
                        <p>Contenu:</p>
                    </label>
                    <input type="text" id="content" name="content" placeholder="contenue de votre article">

                    <label for="image">
                        <p>Image:</p>
                    </label>
                    <input type="file" id="image" name="image">

                    <label for="date">
                        <p>Date:</p>
                    </label>
                    <input type="text" id="date" name="date" placeholder="Date du post">
                
                    <label for="type">
                        <p>LifeStyle ou Rap ?:</p>
                    </label>
                    <select required name="type">
                        <option value="unknow">Choisissez la catégorie de votre poste</option>
                        <option value="lifestyle">Life Style</option>
                        <option value="rap">Rap</option>
                    </select>
                </div>

                <input class="button" type="submit" value="Créez votre poste">
            </form>

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
