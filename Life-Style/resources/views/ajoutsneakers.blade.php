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
    <p>Vendre des sneakers !<p>
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
        
            <form action="{{ route('sneakers-user') }}" method="{{ 'POST' }}" enctype="multipart/form-data">
                @csrf
                <p>Veuillez insérer les informations de la sneakers</p>
                <div class="content">

                    <label for="nom">
                        <p>Nom:</p>
                    </label>
                    <input type="text" id="nom" name="nom" placeholder="Nom complet de la sneakers">
                    
                    <label for="prix">
                        <p>Prix:</p>
                    </label>
                    <input type="text" id="nom" name="prix" placeholder="Prix de la sneakers">

                    <label for="image">
                        <p>Image:</p>
                    </label>
                    <input type="file" id="image" name="image">

                    <label for="marque">
                        <p>Marque:</p>
                    </label>
                    <select required name="marque">
                        <option value="unknow">Choisissez la marque de la sneakers</option>
                        <option value="nike">Nike</option>
                        <option value="adidas">Adidas</option>
                        <option value="puma">Pumas</option>
                    </select>
                </div>

                <input class="button" type="submit" value="Créer la vente de sneakers">
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
