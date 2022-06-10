@extends('layouts.app')

@section('content')

<section class="jumbotron"></section>

<section class="comics_section">

    <div class="container">

        <div class="primary-btn" id="current_series_btn" >Current series</div>

        <div class="row">

            @foreach($comics_collection as $comic)
                <div class="col-2">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h4>{{$comic['series']}}</h4>
                </div>
            @endforeach

        </div> 
        
        <a href="#" class="primary-btn" id="load_more_btn">Load more</a>

    </div>
          
</section>


        


@endsection