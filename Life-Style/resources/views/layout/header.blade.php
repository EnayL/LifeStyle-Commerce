<header>
    <div class="globalblock">

        <div class="block1">
            <a href="{{ '/register' }}" class="identifier" method={{ 'GET' }}>Rejoignez-nous</a>
            <a href="{{ '/login' }}" class="identifier2" method="{{ 'GET' }}">S'identifier</a>
        </div>

        <div class="block2">
            <img src='../image/logo.png'>

            <div class="text">

                <a href="{{ '/cataloguesneakers' }}" class="text">Sneakers</a>
                <a href="{{ '/home' }}" class="text">Home</a>
                <a href="{{ '/lifestylerap' }}" class="text">Life Style & Rap</a>
                <a href="" class="text">Paume.</a>

            </div>
        </div>

    </div>
</header>
@yield('content')
