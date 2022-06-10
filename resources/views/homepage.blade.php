@extends('layouts.app')

@section('content')
<h1>Title</h1>

<div class="container">
    <div class="row">

        @foreach($comics as $comic)
        <div class="col">
            <!-- <img class="img-fluid" src="{{$comic['thumb']}}" alt=""> -->
            <h3>img title</h3>
        </div>
        @endforeach

    </div>
</div>

@endsection