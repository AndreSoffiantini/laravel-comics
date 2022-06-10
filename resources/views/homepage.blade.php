@extends('layouts.app')

@section('content')

<section class="jumbotron"></section>


<div class="container">
    <div class="row">

        @foreach($comics as $comic)
        <div class="col">
            <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
        </div>
        @endforeach

    </div>
</div>

@endsection