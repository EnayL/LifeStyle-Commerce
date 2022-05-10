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
    <p>Ajoutez vos vidéos !<p>
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
        
            <form action="{{ route('paume-user') }}" method="{{ 'POST' }}" enctype="multipart/form-data">
                @csrf
                <p>Veuillez insérer les informations pour poster votre vidéo</p>
                <div class="content">

                    <label for="title">
                        <p>Title:</p>
                    </label>
                    <input type="text" id="nom" name="title" placeholder="Titre">
                    
                    <label for="titlesecond">
                        <p>Second Title:</p>
                    </label>
                    <input type="text" id="nom" name="titlesecond" placeholder="Description">

                    <label for="titlesecond">
                        <p>l'URL de la vidéo:</p>
                    </label>
                    <input type="text" id="nom" name="url" placeholder="URL">
                    <label for="image">
                        <p>Image:</p>
                    </label>
                    <input type="file" id="image" name="image">

                    <label for="tag">
                        <p>Marque:</p>
                    </label>
                    <select required name="tag">
                        <option value="unknow">Choisissez la catégorie de la vidéo</option>
                        <option value="music">Music</option>
                        <option value="documentaire">Documentaire</option>
                        <option value="courtmetrage">Court Métrage</option>
                        <option value="commercial">Commercial</option>
                    </select>
                </div>

                <input class="button" type="submit" value="Créer le poste de vidéo">
            </form>

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
<script type="text/javascript" src="../js/"></script> 
</body>

</html>
