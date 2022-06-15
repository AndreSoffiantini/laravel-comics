@extends('layouts.app')

@section('page-title', 'Comics Page')

@section('content')

<section class="jumbotron"></section>

<div class="comics_section">

    <div class="container">
        <div class="primary-btn" id="current_series_btn" >Current series</div>
        
        <div class="row row-cols-6">

            @forelse($comics as $id => $comic)
            <div class="col">
                <div class="comic">
                    <a href="{{route('comics.show', $id)}}">

                        <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                    </a>
                    <p class="text-white text-uppercase">{{$comic['series']}}</p>
                </div>
            </div>
            @empty
            <div class="col">No results to show</div>
            @endforelse

        </div>
    </div>


    <div class="text-center">
        <a class="btn btn-primary text-uppercase rounded-0" href="#">Load more</a>
    </div>

</div>

<div class="banner bg-primary py-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center">
                <img class="mx-2" width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <img class="mx-2" width="60" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>DC Merchandise</span>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <img class="mx-2" width="60" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>Subscription</span>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <img class="mx-2" width="60" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <span>Comic shop location</span>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <img class="mx-2" width="60" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC Power VISA</span>
            </div>
        </div>
    </div>
</div>


@endsection