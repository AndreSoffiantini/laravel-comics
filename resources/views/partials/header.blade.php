<header id="site_header">

    @include('partials.logo')

    <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex align-center">
                    <img src="@/assets/img/dc-logo.png" alt="">
                </div>

                <div class="col d-flex justify-end">
                    <nav class="d-flex align-center unstyled-list h-100">
                        <a href="{{route('characters')}}">Characters</a>
                        <a href="{{route('comics')}}">Comics</a>
                        <a href="{{route('movies')}}">Movies</a>
                        <a href="{{route('tv')}}">TV</a>
                        <a href="{{route('games')}}">Games</a>
                        <a href="{{route('collectibles')}}">Collectibles</a>
                        <a href="{{route('videos')}}">Videos</a>
                        <a href="{{route('fans')}}">Fans</a>
                        <a href="{{route('news')}}">News</a>
                        <a href="{{route('shop')}}">Shop</a>
                    </nav>
                </div>
            </div>
    </div>
    
</header>