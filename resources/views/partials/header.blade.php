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
                    </nav>
                </div>
            </div>
    </div>
    
</header>