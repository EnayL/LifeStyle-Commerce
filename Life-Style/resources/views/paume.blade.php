<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <title>Resell Academy</title>
    <link href="{{ '../CSS/paume.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/header.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ '../CSS/footer.css' }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

</head>

<body>
    @extends('layout.header-connect')
    @section('content')


        <section id="slider">
            <div class="container">
                <div class="subcontainer">
                    <div class="slide-wrapper">
                        <div class="controller">
                                <div>
                                    <h2>Paume.</h2>
                                 </div>
                                <div id="controls">
                                    <button class='previous'><i class="fa-solid fa-caret-left"></i></button>
                                    <button class='next'><i class="fa-solid fa-caret-right"></i></button>
                                </div>
                        </div>
                        <br>
                        <div class="my-slider">
                            @foreach ($paume as $paume)
                            <div>
                                <div class="slide">
                                    <div class="slide-img" style="background-image: url('{{ asset('storage/avatars/' . $paume->image)}}');">
                                        <a href="{{ $paume['url'] }}" target=blank_>
                                            Voir Vidéo
                                        </a>
                                    </div>
                                    <br>
                                    <div>
                                        <h3>{{ $paume['title'] }}</h3>
                                        <p>{{ $paume['titlesecond'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
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
        <script src="../js/script.js"></script>
    @endsection
</body>
</html>
