<header>
    
    
    <div class="globalblock">

        

     @if  (Auth::check())
         <div class="block1">
            <p>{{ Auth::user()->pseudo }}</p>

                <form action="/home" method="POST">
                    @csrf
                    <input class="logout" type="submit" value="logout">
                </form>
        </div>

     @else 

        <div class="block1">
            <a href="{{ '/register' }}" class="identifier" method={{ 'GET' }}>Rejoignez-nous</a>
            <a href="{{ '/login' }}" class="identifier2" method="{{ 'GET' }}">S'identifier</a>
        </div>

    @endif

        @if (Auth::check())
            @if (Auth::user()->role == 'admin')
        
                <div class="block2">
                   
                    <img src='../image/logo.png'>
        
                    <div class="text">
                        <a href="{{'/cataloguesneakers'}}" class="text">Sneakers</a>
                        <a href="{{ '/home' }}" class="text">Home</a>
                        <a href="{{ '/lifestylerap' }}" class="text">Life Style & Rap</a>
                        <a href="{{ '/paume' }}" class="text">Paume.</a>
                        <a href="{{'/ajoutsneakers'}}" class="text">Vendre Sneakers</a>
                        <a href="{{'/ajoutlifestylerap'}}" class="text">Poste Article</a>
                        <a href="{{'/ajoutpaume'}}" class="text">+ Paume</a>
                    </div>
        
                </div>
            @else

            <div class="block2">
                   
                <img src='../image/logo.png'>
    
                <div class="text">
                    <a href="{{'/cataloguesneakers'}}" class="text">Sneakers</a>
                    <a href="{{ '/home' }}" class="text">Home</a>
                    <a href="{{ '/lifestylerap' }}" class="text">Life Style & Rap</a>
                    <a href="{{ '/paume' }}" class="text">Paume.</a>
                </div>
    
            </div>
            @endif
        @else

            <div class="block2">
                    
                <img src='../image/logo.png'>

                <div class="text">
                    <a href="{{'/cataloguesneakers'}}" class="text">Sneakers</a>
                    <a href="{{ '/home' }}" class="text">Home</a>
                    <a href="{{ '/lifestylerap' }}" class="text">Life Style & Rap</a>
                    <a href="{{ '/paume' }}" class="text">Paume.</a>
                </div>
        @endif
                    
    </div>


</header>
@yield('content')
