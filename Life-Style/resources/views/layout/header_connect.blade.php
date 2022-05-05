<header>
    <div class="globalblock">

        <div class="block1">
            @if (Auth::check())
                {{ Auth::user()->name }}

                <form action="/login" method="post">
                    @csrf
                    <input class="logout" type="submit" value="Logout">
                </form>
        </div>
    @else
        <div class="globalblock">

            <div class="block1">
                <a href="{{ 'register' }}" class="identifier">Rejoignez-nous</a>
                <a href="{{ 'login' }}" class="identifier2">S'identifier</a>
            </div>
            <div class="block2">
                <img src='../image/logo.png'>

                <div class="text">

                    <a href="" class="text">Sneakers</a>
                    <a href="../home" class="text">Home</a>
                    <a href="" class="text">Rap Blog</a>
                    <a href="" class="text">Paume.</a>

                </div>
            </div>
        </div>
        @endif
</header>
@yield('content')
